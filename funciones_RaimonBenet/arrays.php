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

//A partir de aquí empiezo a usar los echo sin paréntesis por que ya me he acostrumbrado a no usarlos ya que no hacen falta.


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

    echo "<br>";
    echo "<table border = 1 >";

    foreach($alumnos as $alumno => $info){
        echo "<tr>";
        foreach($info as $inf){
            echo("<td>".$inf ."<td>");
        }
         echo "<tr>";
    }
    echo "</table>";
    echo "<br>";

    $arrayNombres = array_column($alumnos, 'nombre');
    print_r($nombres);

    echo "<br>";
    $Array10 = ['1','2','3','4','5','6','7','8','9','10'];
    echo "Suma total : ". array_sum($Array10);
?>
</body>
</html>