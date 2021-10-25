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
            <input type="text" name="Numero1" id="Numero1" value="" placeholder = "Numero">
            <input type="submit" name="submit" value="Enviar"/>
        </form>
    </div>

    <?php
    
    error_reporting(0);

    $numero1 = $_POST['Numero1'];

    echo "<h1>La tabla de multiplicar del numero $numero1 es: </h1><br>";

    for($i=1 ; $i<=10; $i++){

        echo $numero1*$i . "<br>";

    }

    ?>

</body>
</html>