<?php
require('database.php');
$user = $_GET['user'];
$password = $_GET['password'];
$pin = $_GET['pin'];

if ($_GET['user'] != null && $_GET['password'] != null && $_GET['pin'] != null){
    $pdoResponse = $pdo->prepare('INSERT INTO usuarios (usuario, contrasena, pin) VALUES (:user, :pass, :pin)');
    $pdoResponse->bindParam(":user", $user);
    $pdoResponse->bindParam(":pass", $password);
    $pdoResponse->bindParam(":pin", $pin);
    $pdoResponse->execute();
} else {
    echo 'Error';
}

?>