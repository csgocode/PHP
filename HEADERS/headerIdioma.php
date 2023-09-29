<?php

$texto = "";
$idiomaNavegador = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch ($idiomaNavegador) {
    case 'en':
        $texto = 'Language in English';
        break;
    case 'es':
        $texto = 'Idioma en Español';
        break;
    case 'ca':
        $texto = 'Idioma en Català';
        break;
    default:
        $texto = 'No he detectado ni ingles, ni español ni catalan. Te muestro la web por defecto en español.';
        break;
    
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Idioma</title>
    <meta name="author" content="Víctor Ponz">
</head>    

<body>
<p><?php echo $texto; ?></p>
</body>
</html>