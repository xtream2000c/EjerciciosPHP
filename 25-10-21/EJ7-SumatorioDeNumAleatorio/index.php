<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sumatorio de un numero aleatorio</h1>

    <?php

    $numero=rand(1,20);
    $sumatorio = ($numero*($numero+1))/2;
    echo "El sumatorio del numero ".$numero." es ".$sumatorio;
    ?>

</body>
</html>