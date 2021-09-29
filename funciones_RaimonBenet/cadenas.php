<DOCTYPE html>
<html>
<body>

<?php

$nombre = $_GET['nombre'];
$trimmed = trim($nombre,"/");
if($nombre == null){
    echo("Raimon");
}

echo($trimmed);

echo ("<br>"."<br>");
echo ("La longitud es de : ");
echo strlen($nombre);


echo ("<br>"."<br>");

echo strtoupper($nombre);
echo("<br>");
echo strtolower($nombre);

echo("<br>"."<br>");

$prefijo = $_GET['prefijo'];

$pos = strpos($nombre,$prefijo);
if ($pos !== true) {
    echo ("La cadena ".prefijo." fue encontrada en la cadena ".$nombre);
}else{
    echo ("La cadena ".prefijo." no fue encontrada en la cadena ".$nombre);
}


?>
</body>
</html>