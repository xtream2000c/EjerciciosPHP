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

    function calculadora($x, $y, $operacion){

        if ($operacion == "suma") {

            return $x + $y;

        }elseif($operacion == "resta"){

            return $x - $y;

        }else if($operacion == "multiplica"){

            return $x * $y;
        
        } else if($operacion == "divide"){
        
            return $x / $y;

        }else{

            return 0;

        }

    }

    ?>
</body>
</html>