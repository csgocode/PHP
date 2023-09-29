<?php
session_start();
include('config.php');
error_reporting(0);

if ($_SESSION['InicioSesion'] == null && $_COOKIE['InicioSesion'] == null) {
    header('Location: privada.php');
    exit();
}

if ($_SESSION['InicioSesion'] == $contrasenaValida || $_COOKIE['InicioSesion'] == $contrasenaValida) {
    echo "Has iniciado sesión correctamente.";
    echo "<hr>VALORES<hr>";
    echo "Sesion var: " . $_SESSION['InicioSesion'] . "<br>";
    echo "Cookie var: " . $_COOKIE['InicioSesion'] . "<br>";
    echo "<br><br>";
    echo "<a href='logout.php'>Cerrar sesion</a>";
    echo "<br><br>";
} else {
    echo "Se ha producido un error, por favor, inicia sesion";
    header("refresh=3; URL=privada.php");
    exit();
}
?>
<html>
<body>
<form action="getImage.php" method="get">
Nombre Imagen<br><input type="text" name="img"><br>
    <input type="submit" value="Enviar">
</form>
<br><br>
<h1>Subida de archivos</h1>
<form action="subirIMG.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="99999999999" />
    <input type="file" name="imagen" />
    <input type="submit" name="submit" />
</form>
</body>
</html>