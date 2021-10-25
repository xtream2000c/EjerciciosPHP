<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobacion datos</title>
</head>
<body>

<h1>Tus datos de suscripcion</h1>

<p>Estos son los datos que nos has enviado</p>


<?php

    echo "Nombre: " .$_POST['nombre']."<br>";
    echo "Apellidos: " .$_POST['apellidos']."<br>";
    echo "Email: " .$_POST['email']."<br>";
    echo "Contraseña: " .$_POST['contraseña']."<br>";
    echo "Sexo: " .$_POST['sexo']."<br>";
    echo "Estudios: " .$_POST['estudios']."<br>";
    echo "Aficiones: " ."<br>";
    if($_POST['musica']!="No"){
        echo "" .$_POST['musica']."<br>";
        $musica = false;
    }
    else{
        $musica = true;
    }
    if($_POST['deportes']!="No"){
        echo "" .$_POST['deportes']."<br>";
        $deportes = false;
    }
    else{
        $deportes = true;
    }
    if($_POST['cine']!="No"){
        echo "" .$_POST['cine']."<br>";
        $cine = false;
    }
    else{
        $cine = true;
    }
    if($_POST['libros']!="No"){
        echo "" .$_POST['libros']."<br>";
        $libros = false;
    }
    else{
        $libros = true;
    }
    if($_POST['ciencia']!="No"){
        echo "" .$_POST['ciencia']."<br>";
        $ciencia = false;
    }
    else{
        $ciencia = true;
    }

    if($musica && $deportes && $cine && $libros && $ciencia){

        $ninguna=true;

    }
    else{

        $ninguna=false;
    
    }

    if($ninguna){
        echo "No hay ninguna aficion <br>";
    }

    echo "Dia de la semana que lo va a recibir: " .$_POST['dia']."<br>";
    echo "Comentario: " .$_POST['comentario'];

?>

<form action="Enviar.html">
    <p>Los datos son correctos</p>
    <input type="submit" value="Enviar" />
</form>

<form action="index.html">
    <p>Los datos no son correctos</p>
    <input type="submit" value="volver" />
</form>
</body>
</html>