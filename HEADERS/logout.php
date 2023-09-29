<?php
session_start();
echo "Cerrando sesion, por favor, espera.";
unset($_COOKIE['InicioSesion']);
unset($_SESSION['InicioSesion']);
header("refresh: 3; url=privada.php");
exit();
?>