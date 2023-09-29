<?php
error_reporting(0);
include('config.php');
session_start();
if ($_SESSION['InicioSesion'] == $contrasenaValida || $_COOKIE['InicioSesion'] == $contrasenaValida) {
    
    $rutaArchivo = '/home/alumno/imagenes/' . $_GET['img'] . '.png';

    if ($_GET['img'] == null) {
        $rutaArchivo = '/home/alumno/imagenes/forbidden.png';
    }

    if (!file_exists($rutaArchivo)) {
            exit("Tu archivo no existe");
            http_response_code(404);
        } else {
            header('Content-Type: image/png');
            $im = imagecreatefrompng("$rutaArchivo");
            imagepng($im);
        }

} else {
    echo "Primero debes iniciar sesion para poder utilizar esta funcion";
    http_response_code(401);
    header('refresh: 3; url=privada.php');
    exit();
}
?>