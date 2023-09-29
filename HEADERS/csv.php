<?php

$productos = [
    [1, "Producto 1", 10.99],
    [2, "Producto 2", 12.50],
    [3, "Producto 3", 8.75],
];

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=productos.csv');

echo "ID;Nombre;Precio\n";

foreach ($productos as $producto) {
    echo $producto[0] . ";" . $producto[1] . ";" . $producto[2] . "\n";
}

exit;
