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

        require_once('lib/nusoap.php');

        $cliente = new nusoap_client('../Servidor/servicio.php');

        $resultado = $cliente->call('calculadora', array('x' => '3', 'y' => 4, 'operacion' => 'suma'));

        echo $resultado;

    ?>
</body>
</html>