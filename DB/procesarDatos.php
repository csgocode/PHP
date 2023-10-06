<?php
session_start();
include 'database.php';

$user = $_GET['user'] ?? null;
$pass = $_GET['password'] ?? null;

if ($user && $pass) {
    $result = $pdo->query("SELECT * FROM usuarios WHERE usuario='$user' AND contrasena='$pass'");

    if ($result->rowCount() > 0) {
        echo "Acceso permitido, credenciales válidas. Redireccionando al panel de Administración.";
        $idUser = $pdo->query("SELECT id FROM usuarios WHERE usuario = '$user';");
        $row = $idUser->fetch();
        $idUser = $row['id'];
        $_SESSION['id'] = $idUser;
        header("refresh: 3, URL=panelAdmin.php?id=$idUser");

    } else {
        echo "Acceso denegado.";
    }
} else {
    echo "Error: Proporciona un usuario y contraseña.";
}
?>