<?php
require('database.php');
$user = $_GET['user'];
$password = $_GET['password'];

if ($_GET['user'] != null && $_GET['password']){
    $pdoResponse = $pdo->prepare('UPDATE usuarios SET contrasena = :pass WHERE usuario = :user');
    $pdoResponse->bindParam(":user", $user);
    $pdoResponse->bindParam(":pass", $password);
    $pdoResponse->execute();
} else {
    echo 'Error';
}

?>