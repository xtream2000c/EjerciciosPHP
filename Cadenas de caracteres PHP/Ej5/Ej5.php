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
        Si tenemos una cadena con un nombre y apellidos, realizar un programa
        que muestre las iniciales en mayúsculas.
    </h1>

    <?php

    $nombreApellidos = $_POST['nombreApellidos'];

    echo ucwords($nombreApellidos);

    ?>
</body>
</html>