<!DOCTYPE html>
<html>
<body>
    <?php
    $nombres = ["nombre1" => "jajajaa","nombre2" => "awa","nombre3" => "eeee"];

    function ordenar($a,$b){
        return strlen($b)-strlen($a);
    }
    
    uasort($nombres, 'ordenar');
    print_r($nombres);

?>
</body>