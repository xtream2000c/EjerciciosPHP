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

    include ("lib/nusoap.php");
    $client = new nusoap_client('http://www.lapolitecnica.net/webservices/servicio.php?wsdl'.'wsdl');

    $err = $client->getError();
    if ($err) {
        echo 'Error en constructor'.$err;
    }
    print($err);
    ?>


</body>
</html>