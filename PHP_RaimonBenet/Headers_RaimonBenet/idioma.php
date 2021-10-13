<?php

    //Crea aquí tu script para seleccionar el idioma
    $language = $_GET['setLanguage'] ?? ""; 


    //Fin script

    if ($language == "en"){

        $content = "This page is in English";

        $title = "Change the language of the page";


    }else if ($language == "ja"){

        $content = "このページは日本語です";

        $title = "ページの言語を変更する";
    }
    
    else{

        $content = "Esta página está en Castellano(Idioma por defecto), puede que el idioma introducido en la cabecera no esté disponible";

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

        <li><a href='idioma.php?setLanguage=es'>Español</a></li>

        <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>

        <li><a href='idioma.php?setLanguage=ja'>Japonés</a></li>
    </ul>

    <?= $content ?>

</body>

</html>