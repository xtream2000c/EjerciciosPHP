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

    $numero = rand(1, 100);

    echo "<h1> Sumatorio del numero aleatorio $numero </h1>";
    $sumador = 0;

    for ($i=0; $i <= $numero; $i++) {
        $sumador = $sumador + ($numero - $i);
       
    }

    echo "El sumatorio de $numero es: $sumador";

    ?>
</body>
</html>