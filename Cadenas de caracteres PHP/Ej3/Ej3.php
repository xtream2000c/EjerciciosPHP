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
        Pide una cadena y un carácter por teclado (valida que sea un carácter) y
        muestra cuantas veces aparece el carácter en la cadena.
    </h1>

    <?php

    $cadena = $_POST['cadena'];
    $caracter = $_POST['caracter'];

    $apariciones = substr_count($cadena, $caracter);

    echo "La cadena contiene ". $apariciones ." del caracter introducido."

    ?>
</body>
</html>