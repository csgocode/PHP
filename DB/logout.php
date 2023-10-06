<?php
session_start();
if (isset($_SESSION['id'])) {
    session_destroy();
    echo "Deslogueado con éxito.";
    header("refresh: 1, URL=login.php");
    exit();
} else {
    echo "No estas logueado.";
    header("refresh: 1, URL=login.php");
    exit();
}
?>