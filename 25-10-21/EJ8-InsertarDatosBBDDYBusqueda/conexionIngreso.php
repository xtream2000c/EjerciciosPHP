<?php

    $enlace = mysqli_connect("127.0.0.1", "root", "", "directorio");

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $poblacion = $_POST['poblacion'];
    $codigopostal = $_POST['codigoPostal'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "INSERT INTO clientes (nombre, apellidos, direccion, poblacion, codigopostal, telefono, email)
    VALUES ('$nombre', '$apellidos', '$direccion', '$poblacion', '$codigopostal', $telefono, '$email')";

    if(mysqli_query($enlace, $sql)){
        echo "Guardado correctamente";
    }else{
        echo "Error no se guardo <br>".mysqli_error($enlace);
    }

    mysqli_close($enlace);
?>