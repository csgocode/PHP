<?php
$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
if (isset($_GET['id'])) {
    $idProducto = $_GET['id'];
    if (array_key_exists($idProducto, $productos)) {
        echo 'Se ha encontrado el producto con ID ' . $idProducto . ' y es: ' . $productos[$idProducto];
    } else {
        echo 'Error 404: No se ha encontrado el producto con el ID proporcionado';
        http_response_code(404);
    }
} else {
    echo "Debes introducir un parametro ID.";
}
?>