<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Pagina de bienvenida</h1>
    <?php

    $fecha = getdate();

    $hora = $fecha['hours'];

    echo $hora;

    if ( 08 =< $hora && $hora < 13 ) {
        echo "Buenos dias";
    }elseif( 13 =< $hora && $hora < 21 ){
        echo "Buenas tardes";
    }else{
        echo "Buenas noches";
    }

    ?>
</body>
</html>