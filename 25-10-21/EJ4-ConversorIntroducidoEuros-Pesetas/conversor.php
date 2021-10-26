<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Conversor euros a pesetas</h1>
    <?php

        $euros=$_POST['euros'];

        echo $euros . '€ = ' . $euros*166.368 . ' Pestas. <br>';

    ?>

    <form action="index.html" method="post">
        <input type="submit" value="Volver">
    </form>
    
</body>
</html>