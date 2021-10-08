<!DOCTYPE html>
<html>
<body>
    <?php
    $edades=array("Juan"=>"31","Maria"=>"41","Andrés"=>"39","Berta"=>"40");
    
    //Nombre ascendente
    ksort($edades);
    echo "Nombre ascendente : ";
    print_r($edades);
    
    echo "<br>";

    //Edad ascendente
    asort($edades);
    echo "Edad ascendente : ";
    print_r($edades);
    
    echo "<br>";
   
    //Nombre descendente
    krsort($edades);
    echo "Nombre descendente : ";
    print_r($edades);
  
    echo "<br>";

    //Edad descendente
    arsort($edades);
    echo "Edad descendente : ";
    print_r($edades);

    echo "<br>";
  

  

?>
</body>