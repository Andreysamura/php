<!DOCTYPE html>
<html>
    <body>
        <?php
            //declaraciones de variables 
            $var1 = 50;
            $var2= 34;
            $var3 = 78;
            //operacion de comparacion
            if($var1<$var2){
                echo "$var1 es menor que $var2 <br>";
            }elseif ($var1 > $var2){
                echo "$var1 es mayor que $var2 <br>";
            }else echo "$var1 es igual a $var2 <br>";


            //menor que tres nuemros
            if ($var1 < $var2 and $var1 < $var3) {
                echo "El numero $var1 es menor que $var2 y $var3";
            } elseif ($var2 < $var1 and $var2 < $var3) {
                echo "El numero $var2 es menor que $var1 y $var3";
            } else echo "El numero $var3 es menor que $var1 y $var2";
        ?> 
        <?php

        ?>

    </body>
</html>