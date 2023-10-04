<?php
require('database.php');
$id = $_GET['id'];

if (isset($_GET['id']) != null){

    $registros = $pdo->exec('DELETE FROM usuarios WHERE id = ' . $id);
    echo "<p>Se han borrado $registros registros.</p>";

} else {
    echo 'Error';
}

?>