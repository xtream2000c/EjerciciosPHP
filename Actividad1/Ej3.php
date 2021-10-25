<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div> <!--Formulario entrada de datos.-->
        <form name="form" action="" method="post">
            <input type="text" name="Numero1" id="Numero1" value="" placeholder = "Numero 1">
            <input type="text" name="Numero2" id="Numero2" value="" placeholder = "Numero 2">
            <input type="submit" name="submit" value="Enviar"/>
        </form>
    </div>
    
    <?php
    error_reporting(0);
    //Definicion de variables.

    $numero1 = $_POST['Numero1'];

    $numero2 = $_POST['Numero2'];

    if($numero1 == null){ //Mira si se ha introducido numero 1
        if($numero2 == null){ // Mira si se ha introducido numero 2
            echo "Los numeros son nulos"; //Si ambos numeros son nulos
        }
        else{
            echo "El numero 1 es nulo.";//Si numero 2 no es nulo
        }
    }
    else{
        if($numero2 == null){
            echo "El numero 2 es nulo";//Si numero 2 es nulo pero numero 1 no es nulo
        }
        else{ //Si ambos numeros no son nulos.
            echo "Suma " . $numero1 + $numero2 . "<br>";
            echo "Resta " . $numero1 - $numero2 . "<br>";
            echo "Multiplicacion " . $numero1 * $numero2 . "<br>";
            echo "Division " . $numero1 / $numero2 . "<br>";
        }
    }

    ?>
</body>
</html>