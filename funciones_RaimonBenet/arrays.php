<DOCTYPE html>
<html>
<body>

<?php

$nombres=['Raimon','César','Willy','Carlos'];
$NumNombres=(count($nombres));

echo("Mi array es : ");
print_r($nombres);
echo("<br>"."<br>");

echo("Este es el numero de nombres que tiene el array : ".$NumNombres);
echo("<br>");

$nombresSeparados = implode(" ",$nombres);

echo("Nombres del array separados por espacios : ".$nombresSeparados);
echo("<br>");

echo("Nombres del array ordenados alfabéticamente : ");
asort($nombres);
    foreach($nombres as $val) {
        echo ("$val\n");
    }
echo("<br>");

echo("Nombres del array al reves : ");
$nombresReves = array_reverse($nombres);
foreach($nombresReves as $nombre){
    echo ("$nombre\n");
}
echo("<br>");

$nombresBuscar = array_search('Raimon', $nombres);
echo("La posición de mi nombre en el array es : ".$nombresBuscar);
echo("<br>");

$alumnos = array(
    array(
        'id' => 0,
        'nombre' => "Raimon",
        'edad' => 19,
    ),
    array(
        'id' => 1,
        'nombre' => "César",
        'edad ' => 19,
    ),
    array(
        'id' => 2,
        'nombre' => "Willy",
        'edad' => 18,
    ),
    array(
        'id' => 3,
        'nombre' => "Carlos",
        'edad' => 35,
    )
    );


?>
</body>
</html>