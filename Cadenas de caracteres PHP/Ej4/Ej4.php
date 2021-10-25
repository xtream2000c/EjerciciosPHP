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
        Suponiendo que hemos introducido una cadena por teclado que
        representa una frase (palabras separadas por espacios), realiza un
        programa que cuente cuantas palabras tiene.
    </h1>

    <?php

    $frase=$_POST['frase'];

    $apariciones = substr_count($frase, " ");

    $palabras = $apariciones + 1;

    echo $frase ."<br>";
    echo "La frase tiene " . $palabras ." palabras";
    ?>

</body>
</html>