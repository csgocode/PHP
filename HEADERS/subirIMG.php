<?php
error_reporting(0);
include('config.php');
session_start();
if ($_COOKIE['InicioSesion' == $contrasenaValida || $_SESSION['InicioSesion'] == $contrasenaValida ]) {
    $directorioSubida = "/home/alumno/imagenes/";
    $max_file_size = "51200";
    $extensionesValidas = array("jpg", "png", "gif");
    if(isset($_POST["submit"]) && isset($_FILES['imagen'])){
        $errores = array();
        $nombreArchivo = $_FILES['imagen']['name'];
        $filesize = $_FILES['imagen']['size'];
        $directorioTemp = $_FILES['imagen']['tmp_name'];
        $tipoArchivo = $_FILES['imagen']['type'];
        $arrayArchivo = pathinfo($nombreArchivo);
        $extension = $arrayArchivo['extension'];
        // Comprobamos la extensión del archivo
        if(!in_array($extension, $extensionesValidas)){
            $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";
        }
        // Comprobamos el tamaño del archivo
        if($filesize > $max_file_size){
            $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";
        }
        // Comprobamos y renombramos el nombre del archivo
        $nombreArchivo = $arrayArchivo['filename'];
        $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);
        // Desplazamos el archivo si no hay errores
        if(empty($errores)){
            $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;
            move_uploaded_file($directorioTemp, $nombreCompleto);
            print "El archivo se ha subido correctamente";
        }
    }
} else {
    echo "No puedes subir archivos si no tienes una sesion iniciada.";
    http_response_code(401);
    header("refresh=1; URL=privada.php");
}

?>