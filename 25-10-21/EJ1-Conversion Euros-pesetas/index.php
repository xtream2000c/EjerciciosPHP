<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Conversion Euros / Pesetas</h1>

    <?php

    for ($i=1; $i <= 10 ; $i++) { 
        echo $i . '€ = ' . $i*166.368 . ' Pestas. <br>';
    }

    ?>
</body>
</html>