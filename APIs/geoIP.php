<?php
$token = "c18600eee7a32b3b0fa13cced11ac991";
$ipUsuario = '213.0.87.42'; // $_SERVER['REMOTE_ADDR'];
$jsonRespuesta = file_get_contents("http://api.ipapi.com/api/$ipUsuario?access_key=$token");
$datosArray = json_decode($jsonRespuesta, true);
print_r($datosArray);
$tipo = $datosArray['type'];
$continente = $datosArray['continent_code'];
$pais = $datosArray['country_name'];
$region = $datosArray['region_name'];
$emojiPais = $datosArray['location']['country_flag'];
$llamar = $datosArray['location']['calling_code'];
?>
<html>
    <head>
        <title>Uso de APIs: IP Info</title>
    </head>
    <body>
        <h1>IP Info</h1>
        <h4>IP: <?= $ipUsuario?></h4>
        <h4>Tipo de IP: <?= $tipo ?></h4>
        <h4>Continente: <?= $continente ?></h4>
        <h4>Pais: <?= $pais ?></h4>
        <h4>Region: <?= $region ?></h4>
        <h4>Emoji Pais: <img width="20px" height="20px" src="<?= $emojiPais ?>"></h4>
        <h4>Para llamar a este pais debes usar el prefijo +<?= $llamar ?></h4>
    </body>
</html>