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
            <input type="text" name="Numero1" id="Numero1" value="" placeholder = "Cantidad de pesetas">
            <input type="submit" name="submit" value="Transformar a euros"/>
        </form>
    </div>

    <?php
    
    error_reporting(0);

    $numero1 = $_POST['Numero1'];

    echo "El resultado en € es: ". $numero1/166.386;

    ?>

</body>
</html>