<?php

$idiomaCookie = $_POST['idioma'];

setcookie("idioma", $idiomaCookie);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Se ha guardado la preferencia recargue la pagina</p>
    <p>Your preferences has been saved reload this page</p>
    <a href="index.php">Volver</a>
</body>
</html>