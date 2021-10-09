<!DOCTYPE html>
<html>
<body>
    <?php
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
        $password = "";
        for ($i=1;$i<=$upper;$i++){
            $password .= chr(rand(65,90));
       }
       for ($i=1;$i<=$lower;$i++){
            $password .= chr(rand(97,122));
       }
       for  ($i=1;$i<=$numeric;$i++){
            $password .= chr(rand(48,57));
       }
        for ($i=1;$i<=$other;$i++){
           $password .= chr(rand(33,47));
        }
        echo ("La contraseña generada es.. : ".str_shuffle($password));
      
    }
    rand_Pass();
    
    

?>
</body>