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
echo("<br>"."<br>");
$cuantasA = substr_count(strtolower($nombre),'a');

echo ("En la frase : ".$nombre. " hay un total de ". $cuantasA ." a") ;

echo("<br>"."<br>");

$primeraA = stripos(strtolower($nombre),'a');

if($primeraA == null){
    echo("NO hay ninguna a en la frase ".$nombre);
}else{
echo ("En la frase : ".$nombre. " la primera a que aparece esta en la posición : ". $primeraA);
}

echo("<br>"."<br>");

?>
</body>
</html>