<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>4.- Escriba un programa que muestre dos secuencias aleatorias de 10 bits y el resultado de hacer la conjunción lógica ("y" lógico) bit a bit.</h1>
    <br>

    <?php

        $cadena1 = "";

        for ($i=0; $i < 10 ; $i++) { 
            $cadena1 = $cadena1 ." ".rand(0,1);
        }

        echo "Cadena 1: ". $cadena1;
        echo "<br>";
        $cadena2 = "";

        for ($i=0; $i < 10 ; $i++) { 
            $cadena2 = $cadena2 ." ".rand(0,1);
        }

        echo "Cadena 2: ". $cadena2;
        echo "<br>";
        $cadena3 = "";

        $cadena1 = str_replace(' ', '', $cadena1);
        $cadena2 = str_replace(' ', '', $cadena2);
        
        for ($i=0; $i < strlen($cadena1); $i++) { 
            
            if ($cadena1[$i] && $cadena2[$i]) {
                $cadena3 = $cadena3 . " ". 1;
            }else{
                $cadena3 = $cadena3 . " ". 0;
            }
            
            
        }

        echo "Cadena 3: ". $cadena3;
        echo "<br>";

    ?>

</body>
</html>