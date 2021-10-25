<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        Realizar un programa que comprueba si una cadena leída por teclado
        comienza por una subcadena introducida por teclado.
    </h1>
    <h3>
        Aclaración: Comprobar si la segunda cadena esta contenida en la primera cadena.
    </h3>
    <?php

        $cadena1 = $_POST['cadena1'];
        $cadena2 = $_POST['cadena2'];

        if(strpos($cadena1,$cadena2) !== false)
        {
            if(strpos($cadena1,$cadena2)===0){
                echo "La cadena 1 comienza por la cadena 2";
            }
            else{
                echo "La cadena 1 no comienza por la cadena 2, pero la contiene";
            }
        }
        else{
            echo "La cadena 1 no contiene la cadena 2";
        }

    ?>
</body>
</html>