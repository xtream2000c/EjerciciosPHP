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
        Realizar un programa que lea una cadena por teclado y convierta las mayúsculas a
        minúsculas y viceversa.
    </h1>

    <?php

    $cadena = $_POST['cadena'];

    $longitudCadena = strlen($cadena);

    for ($posicionCaracter=0; $posicionCaracter < $longitudCadena; $posicionCaracter++) { 

        $caracter = substr($cadena, $posicionCaracter, 1);

        if(ctype_upper($caracter)){
            echo strtolower($caracter);
        }

        else{
            echo strtoupper($caracter);
        }

        
    }


    ?>
</body>
</html>