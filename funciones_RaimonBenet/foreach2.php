<html>
<body>
    <?php
    echo "<ul>";
    $color = array("blanco" => "blanco.html","verde" => "verde.html","rojo" => "rojo.html");
    foreach ($color as $valor => $link){
        echo "<li><a href='$link'>$valor</a></li>";
        //Cuando escribo codigo HTML, no hace falta separar 
        //todos los li, ul ..... en comillas, 
        //con uno al principio y otro al final es suficiente
    }
    echo "</ul>";
?>
</body>
</html>