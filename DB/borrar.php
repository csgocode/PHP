<?php
require('database.php');

if (isset($_GET['id']) != null){
    //anti SQLi
    $stmt = $pdo->prepare('DELETE FROM stock WHERE id_producto = :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $registros = $stmt->rowCount();
    echo "<p>Se han borrado $registros registros.</p>";
} else {
    echo 'Error';
}

?>