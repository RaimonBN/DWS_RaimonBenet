<!DOCTYPE html>
<html>
<body>
    <?php
    $temperaturas = array("1","8","3","5","5","16","17","22","21","41","31","21","19","12","13","10");
    
   
    //Media de temperatura del mes
    $media = array_sum($temperaturas)/count($temperaturas);
    print_r ("Temperatura media del mes : ".$media." grados");

    echo "<br>";
    



    sort($temperaturas);
    //5 temperaturas mínimas
    $min = array_slice($temperaturas,0,5);
    echo ("Las 5 temperaturas mas bajas : ");
    print_r($min);

    echo "<br>";
    //5 temperaturas máximas
    $max = array_slice($temperaturas,-5,5);
    echo ("Las 5 temperaturas mas altas : ");
    print_r($max);


?>
</body>