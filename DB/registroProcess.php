<?php
session_start();
require('database.php');
if($_SERVER['REQUEST_METHOD'] = 'POST'){
    if ($_POST['nombre'] != null && $_POST['user'] != null && $_POST['correo'] != null && $_POST['pass1'] != null && $_POST['pass2'] != null && $_POST['estudios'] != null && $_POST['pin'] != null) {        
    $directorioSubida = "avatares/";
    $max_file_size = "51200000";
    $extensionesValidas = array("jpg", "png", "gif");
    $usuario = $_POST['user'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $pin = $_POST['pin'];
    $estudios = $_POST['estudios'];
    $errores = array();
    $nombreArchivo = $_FILES['imagen']['name'];
    $filesize = $_FILES['imagen']['size'];
    $dirTest = sys_get_temp_dir();
    $directorioTemp = $_FILES['imagen']['tmp_name'];
    $tipoArchivo = $_FILES['imagen']['type'];
    $arrayArchivo = pathinfo($nombreArchivo);
    $extension = $arrayArchivo['extension'];

    $checkUser = $pdo->prepare("SELECT id FROM usuarios WHERE usuario = :user");
    $checkUser->bindParam(":user", $usuario);
    $checkUser->execute();

    if ($checkUser->fetch()) {
        $errores[] = "El usuario ya existe. Por favor elige otro nombre de usuario. Te vamos a redirigir en 5 segundos.";
        header('Refresh: 5, URL=registro.php');
    }

    if ($pass1 != $pass2) {
        $errores[] = "La confirmación de la contraseña es incorrecta. Te vamos a redirigir en 5 segundos.";
        header('Refresh: 5, URL=registro.php');
    }

    // Comprobamos la extensión del archivo

    if(!in_array($extension, $extensionesValidas)){
        $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo. Te vamos a redirigir en 5 segundos.";
        header('Refresh: 5, URL=registro.php');
    }

    // Comprobamos el tamaño del archivo

    if($filesize > $max_file_size){
        $errores[] = "La imagen debe de tener un tamaño inferior a 5000 kb. Te vamos a redirigir en 5 segundos.";
        header('Refresh: 5, URL=registro.php');
    }

    // Comprobamos y renombramos el nombre del archivo

    $nombreArchivo = $arrayArchivo['filename'];
    $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);
    $nombreArchivo = $nombreArchivo . rand(1, 100);

    // Desplazamos el archivo si no hay errores

    if(empty($errores)){
        $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;
        $pdoResponse = $pdo->prepare('INSERT INTO usuarios (usuario, contrasena, pin, nombre, correo, estudios, avatarLocation) VALUES (:user, :pass, :pin, :nombre, :correo, :estudios, :avatar)');
        $pdoResponse->bindParam(":user", $usuario);
        $pdoResponse->bindParam(":pass", $pass1);
        $pdoResponse->bindParam(":pin", $pin);
        $pdoResponse->bindParam(":nombre", $nombre);
        $pdoResponse->bindParam(":correo", $correo);
        $pdoResponse->bindParam(":estudios", $estudios);
        $pdoResponse->bindParam(":avatar", $nombreCompleto);
        $pdoResponse->execute();
        $idUser = $pdo->query("SELECT id FROM usuarios WHERE usuario = '$usuario';");
        $row = $idUser->fetch();
        $idUser = $row['id'];

        move_uploaded_file($directorioTemp, $nombreCompleto);
        print "Te has registrado correctamente. Te vamos a llevar a tu panel de administracion. Espera unos segundos.";
        header('Refresh: 5, URL=usuario.php?id=' . $idUser);
        exit();
    } else {
        print_r($errores);
    }

} else {
    echo "No has completado todos los campos. Te vamos a redirigir de nuevo.";
    header("refresh: 4, URL=registro.php");

}

} else {
    echo "test";
}

function sanitizar($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
}
?>