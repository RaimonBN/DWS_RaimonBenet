<DOCTYPE html>
<html>
<body>

<?php
$browser = $_SERVER['HTTP_USER_AGENT'];

    if(strpos($browser,'Mozilla') !== false){
        echo "Esta página está abierta con el navegador web Mozilla Firefox";
    }else{
        echo "Estás usando un navegador web diferente a firefox";
    }


    ?>
</body>
</html>