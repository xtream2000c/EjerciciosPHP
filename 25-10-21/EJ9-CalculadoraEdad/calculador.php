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
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $date_1 = new DateTime($_POST['nacimiento']);
        $date_2 = new DateTime("now");
        $interval = $date_1 -> diff($date_2);

        echo $nombre." ".$apellidos." tiene ".$interval->y." años <br>";
        echo "Han pasado ".$interval->days." dias desde que ".$nombre." ".$apellidos." nacio.";

    ?>
</body>
</html>