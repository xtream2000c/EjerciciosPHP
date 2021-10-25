<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caracteres</title>
</head>
<body>

    <h1>Escribir por pantalla cada carácter de una cadena introducida por teclado.</h1>

    <?php

    $cadena = $_POST['texto'];

    $longitudCadena = strlen($cadena);

    for ($posicionCaracter=0; $posicionCaracter < $longitudCadena ; $posicionCaracter++) { 

        $caracter = substr($cadena, $posicionCaracter, 1);

        echo $caracter ."<br>";

    }
   

    ?>

</body>
</html>