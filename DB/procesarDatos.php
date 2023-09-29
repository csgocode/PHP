<?php
include 'database.php';

$user = $_GET['user'] ?? null;
$pass = $_GET['password'] ?? null;

if ($user && $pass) {
    $result = $pdo->query("SELECT * FROM usuarios WHERE usuario='$user' AND contrasena='$pass'");

    if ($result->rowCount() > 0) {
        echo "Acceso permitido, credenciales válidas. ";
        header("refresh: 3, URL=panelAdmin.php");
    } else {
        echo "Acceso denegado.";
    }
} else {
    echo "Error: Proporciona un usuario y contraseña.";
}
?>