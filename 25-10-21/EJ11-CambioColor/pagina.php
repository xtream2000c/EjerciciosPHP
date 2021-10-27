<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{

            <?php
                $color = $_POST['color'];

                switch ($color) {
                    case 'Rojo':
                        echo "color: red;";
                    break;
                    case 'Azul':
                        echo "color: blue;";
                    break;
                    case 'Verde':
                        echo "color: green;";
                        break;
                    default:
                        echo "color: black;";
                    break;
                }

            ?>
            
        }
    </style>
</head>
<body>

    <h1>Selección de colores (selección)</h1><br>
    <p>Se ha elegido el color verde.</p> <br>
    <p>Cambio de color: Rojo - Azul - Verde - Ninguno.</p> <br>
    <a href='index.html'>Ir a otra página para comprobar la cookie</a> <br>  

</body>
</html>