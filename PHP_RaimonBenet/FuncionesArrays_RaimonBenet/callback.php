<DOCTYPE html>
<html>
<body>

<?php

$cadenas = array("hola","bueno","valeeee","ja");
$cadenas2 = array_map("strlen",$cadenas);
echo "La cadena del array con menos longitud es : ".min($cadenas2)." y la cadena con mayor longitud es : ".max($cadenas2);
//tienes que pasarle a una variable el arraymap 
//y dentro del arraymap el primer parametro es strlen 
//y luego el nombre del array y luego un echo con min y max


?>
</body>
</html>