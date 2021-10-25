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
        Pide una cadena y dos caracteres por teclado (valida que sea un carácter), sustituye
        la aparición del primer carácter en la cadena por el segundo carácter.
    </h1>

    <?php

    $caracteres = $_POST['caracteres'];
    $caracteresSeparados = explode("-", $caracteres);
    $cadena = $_POST['cadena'];

    $cadenaCambiada = str_replace($caracteresSeparados[0], $caracteresSeparados[1], $cadena);
    echo $cadenaCambiada;
    ?>
</body>
</html>