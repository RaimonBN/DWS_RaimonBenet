<DOCTYPE html>
<html>
<body>
    <?php

$cadena = array("Seguro","que","apruebo","esta","asignatura");
function partlist($array,$longitud){
    for($i=0;$i<$longitud-1;$i++){
       $programa = implode(" ",array_slice($array,0,$i+1));
       $programa2 = implode(" ",array_slice($array,$i+1,$longitud));
       $array2 = array($programa, $programa2);
       print_r($array2);
       "<br>";
       
    }       
}
partlist($cadena,count($cadena));

?>
</body>
</html>