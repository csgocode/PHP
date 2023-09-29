<?php
$cookies = 'Hola soy una cookie';
setcookie("Cookie1", $cookies);
echo "La cookie de sesion tiene el valor de " . ($_COOKIE["Cookie1"] ?? "NULO");
echo "<br><br>";
$cookieExp2 = 'Cookie que expira';
setcookie("Cookie22EXP", $cookieExp2, time() + 60);
echo "La cookie va a expirar en unos segundos: " . ($_COOKIE["Cookie22EXP"] ?? "NULO");

$modo = 'oscuro';

if (isset($_GET['modo'])) {
    $modo = $_GET['modo'];
    setcookie('diseno', $modo, time() + (86400 * 30), "/");
}

?>
<html>
    <head>
        <title>Practica Cookies</title>
        <link href="estilos.css" rel="stylesheet" />
    </head>
    <body class="<?php echo $modo; ?>">
    <p>Selecciona el modo de visualización:</p>
    <a href="cookies1.php?modo=light"> <button type="button">Modo Claro</button> </a><br>
    <a href="cookies1.php?modo=dark"> <button type="button">Modo Oscuro</button> </a><br>
    </body>
</html>
