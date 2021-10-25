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

            $date_1 = new DateTime("2015-03-15");
            $date_2 = new DateTime("now");

            $interval = $date_1 -> diff($date_2);

            echo "Diferencia = ". $interval->days . " Dias";
            echo "<br>";
            echo "Dinero ahorrado = ". $interval->days * 2.75 ."$";

        ?> 

    </body>

</html>
