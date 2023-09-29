<?php
session_start();
include('config.php');
$dejameEntrar = isset($_GET['dejameEntrar']) ? $_GET['dejameEntrar'] : 0;
$contrasena = isset($_GET['contrasena']) ? $_GET['contrasena'] : '';

if ($_COOKIE["InicioSesion"] === null) {
    setcookie("InicioSesion", "cookieNueva");
    header('Location: privada.php');
    exit();
}

if ($_COOKIE["InicioSesion"] === $contrasenaValida) {
    echo "Sesion iniciada con cookies, redireccionando al panel de administracion";
    header("refresh: 3; url=login.php");
    exit();
}

if ($dejameEntrar == 1) {
    if ($contrasena == $contrasenaValida) {
        echo "Bienvenido, logueado con dejameEntrar y Contraseña. Por favor, espera 3 segundos.";
        $_SESSION['InicioSesion'] = $contrasenaValida;
        $_COOKIE['InicioSesion'] = $contrasenaValida;
        header("refresh:3; url=login.php");

    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Variable dejameEntrar en otro valor o no definida.";
}
