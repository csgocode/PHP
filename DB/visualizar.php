<?php
require('database.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $resultado = $pdo->query("SELECT usuario, contrasena, pin FROM usuarios WHERE id = " . $id);
    
    if ($resultado) {
        foreach ($resultado as $fila) {
            echo "Usuario: " . $fila['usuario'] . "<br>Contrasena: " . $fila['contrasena'] . "<br>PIN: " . $fila['pin'] . "<br>-------------------------<br>";
        }
    } else {
        echo 'Error al realizar la consulta';
    }

} else {
    echo 'Error: ID no proporcionado';
}
?>
