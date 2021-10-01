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

$num0 = str_ireplace('o','0',strtolower($nombre));
echo("En la frase : ".$num0. " se han sustituido las 'o' por '0' ");

echo("<br>"."<br>");

$url = 'http://username:password@hostname:9090/path?arg=value';

$pathprotocol = parse_url($url, PHP_URL_SCHEME);
$pathuser = parse_url($url, PHP_URL_USER);
$pathurl = parse_url($url, PHP_URL_PATH );
$pathquerystring = parse_url($url, PHP_URL_QUERY);

echo("Este es el link : ".$url);
echo("<br>");
echo("Protocolo del link : " .$pathprotocol);
echo("<br>");
echo("Usuario del link : " .$pathuser);
echo("<br>");
echo("URL del link : ".$pathurl);
echo("<br>");
echo("Querystring del link : ".$pathquerystring);

?>
</body>
</html>