<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $cadena1 = "";

        for ($i=0; $i < 10 ; $i++) { 
            $cadena1 = $cadena1 ." ".rand(0,1);
        }

        echo "Cadena inicial: ". $cadena1;

        $cadena1 = str_replace(' ', '', $cadena1);
        $cadena2 = "";

        for ($i=0; $i < strlen($cadena1)-1; $i++) { 
            if ($cadena1[$i] == $cadena1[$i+1]){
                $cadena2 = $cadena2 . " " . +0;
            }else{
                $cadena2 = $cadena2 . " " . 1;
            }
        }
        echo "<br>";
        echo "Cadena de deteccion de cambios: ". $cadena2;

    ?>

</body>
</html>