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
        Realizar un programa que compruebe si una cadena contiene una subcadena. Las
        dos cadenas se introducen por teclado.
    </h1>

    <?php

        $cadena1 = $_POST['cadena1'];
        $cadena2 = $_POST['cadena2'];

        if(strpos($cadena1,$cadena2) !== false)
        {
            echo "La primera cadena contiene a la segunda cadena";
        }
        else{
            echo "La cadena 1 no contiene la cadena 2";
        }

    ?>
</body>
</html>