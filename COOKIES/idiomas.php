<?php
    $language = "";

    //Crea aquí tu script para seleccionar el idioma

    if (isset($_GET['setLanguage'])) {
        $language = $_GET['setLanguage'];
        setcookie("Idioma", $language, time() + 1000);
    }
    //Fin script

    if ($language == "en"){
        $content = "This page is in English";
        $title = "Change the language of the page";
    }else{
        $content = "Esta página está en Castellano (Idioma por defecto)";
        $title = "Cambiar el idioma de la página";
    }

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="author" content="Víctor Ponz">
</head>    

<body>
    <ul><?= $title ?>
        <li><a href='idiomas.php?setLanguage=es'>Español</a></li>
        <li><a href='idiomas.php?setLanguage=en'>Inglés</a></li>
    </ul>
    <?= $content ?>
</body>
</html>