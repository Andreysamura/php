<!DOCTYPE html>
<html>
    <body>
        <title>PHP</title>

        <h3 style="text-align: center;">PHP</h3>

        <?php
        //declaraciones
            $num1 = 10;  
            $num2 = 35;
            $num3 = 34.678;
            $num4 = 56.923;
            $txt = "Jose";
            $txt2 = "Andrey";

        //realizando operacion de enteros
            $suma = $num1 + $num2;
            $multiplicacion = $num1 * $num2;

        //realizando operaciones de decimales
            $suma2 = $num3 + $num4;
            $multiplicacion2 = $num3 * $num4;
        
        //concatenacion
            $texto = $txt . $txt2;

        //resultados
        echo "La suma de enteros es de: $suma <br> ";
        echo "La suma de decimales es de: $suma2 <br> "; 
        echo "La multiplicacion de enteros es de: $multiplicacion <br>";
        echo "La multiplicacion de decimales es de: $multiplicacion2 <br>";
        echo "Concatenacion: $texto"

        ?>  

    </body>
</html>