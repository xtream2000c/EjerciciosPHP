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
        Realizar un programa que dada una cadena de caracteres por caracteres, genere
        otra cadena resultado de invertir la primera.
    </h1>

    <?php

    $cadena = $_POST['cadena'];

    $cadenaInv = strrev($cadena);

    echo $cadenaInv;

    ?>

</body>
</html>