<!DOCTYPE html>
<html>
<body>
    <?php

$tabla = "alumnos";
$campos = array("nombre" => "Juan", "apellidos" => "Martínez");

function insert($tabla,$campos){
    foreach($campos as $campo => $valor){
        $valores .= $campo . ",";
        $valores2 .= ":" . $campo . ",";
    }
    $valores = substr($valores,0,-1);
    $valores2 = substr($valores2, 0, -1);

    return "INSERT INTO $tabla($valores) values ($valores2)";
}
echo insert($tabla,$campos);


$tabla = "alumnos";
$campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");

function update($tabla,$campos){
    $contador = 0;
    foreach($campos as $campo => $valor){
        if($contador == 0){
            $contador .= 1;
            $valores3 = $campo . "= :" .$campo;
        }else{
            $valores4 .= $campo . " =:" .$campo .",";
        }

    }
    $valores4 = substr($valores4, 0, -1);
    return "UPDATE $tabla SET $valores4 WHERE $valores3";
}

echo "<br>";
echo update($tabla,$campos);

$operacion = function($num1, $signo, $num2) {
    $nums = $num1.$signo.$num2;
    if($signo == "+"){
        $resultado = $num1+$num2;
    }else if($signo == "-"){
        $resultado = $num1-$num2;
    }
    else if($signo == "*"){
        $resultado = $num1*$num2;
    }else if($signo == "/"){
        $resultado = $num1/$num2;
    }
    echo $nums." = ".$resultado;
};
    echo "<br>";
    $operacion(5,"-",3);


?>
</body>