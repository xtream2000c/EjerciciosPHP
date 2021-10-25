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
        Introducir una cadena de caracteres e indicar si es un palíndromo. Una palabra
        palíndroma es aquella que se lee igual adelante que atrás.
    </h1>

    <?php

    $palabra = $_POST['palabra'];
   
    $palabra=strtolower($palabra);
    $palabrainvertida = strrev($palabra);

    if (strcmp($palabra, $palabrainvertida)==0){
        echo "<p>La palabra $palabra es un palíndromo</p>";
    } else{
        echo "<p>La palabra $palabra no es un palíndromo</p>";
    }

    ?>
</body>
</html>