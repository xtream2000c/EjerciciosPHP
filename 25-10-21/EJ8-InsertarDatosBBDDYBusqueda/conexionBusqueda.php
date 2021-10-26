<?php

    $enlace = mysqli_connect("127.0.0.1", "root", "", "directorio");

    $apellido = strtoupper($_POST['apellido']);
    $telefono = $_POST['telefono'];
    $usuarioExiste = false;



    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    else {

        if($apellido != ''){
            $apellidos = mysqli_query($enlace, "SELECT id_cliente, apellidos FROM clientes;") or die ("Could not search");
            foreach ($apellidos as $key) {
                $apellido1=explode(' ', $key['apellidos']);
                $idUsuario=$key['id_cliente'];
                if($apellido === strtoupper($apellido1[0])){
                    $usuarioExiste = true;
                    $infoUsuario = mysqli_query($enlace, "SELECT * FROM clientes WHERE id_cliente LIKE $idUsuario;");
                   foreach($infoUsuario as $campo){
                       echo "Nombre : ".$campo['nombre']."<br>";
                       echo "Apellidos : ".$campo['apellidos']."<br>";
                       echo "Direccion : ".$campo['direccion']."<br>";
                       echo "Poblacion : ".$campo['poblacion']."<br>";
                       echo "Codigo postal : ".$campo['codigopostal']."<br>";
                       echo "Telefono : ".$campo['telefono']."<br>";
                       echo "Email : ".$campo['email']."<br>";
                   }
                }else {
                    $usuarioExiste = false;
                }
            }
            if(!$usuarioExiste){
                echo "No existen usuarios con este Apellido";
            }
        }else{
            $telefonos = mysqli_query($enlace, "SELECT id_cliente, telefono FROM clientes;") or die ("Could not search");
            foreach ($telefonos as $key) {
                $idUsuario=$key['id_cliente'];
                if($telefono === $key['telefono']){
                    $usuarioExiste = true;
                    $infoUsuario = mysqli_query($enlace, "SELECT * FROM clientes WHERE id_cliente LIKE $idUsuario;");
                   foreach($infoUsuario as $campo){
                       echo "Nombre : ".$campo['nombre']."<br>";
                       echo "Apellidos : ".$campo['apellidos']."<br>";
                       echo "Direccion : ".$campo['direccion']."<br>";
                       echo "Poblacion : ".$campo['poblacion']."<br>";
                       echo "Codigo postal : ".$campo['codigopostal']."<br>";
                       echo "Telefono : ".$campo['telefono']."<br>";
                       echo "Email : ".$campo['email']."<br>";
                   }
                }else{
                    $usuarioExiste = false;
                }
            }

            if(!$usuarioExiste){
                echo "No existen usuarios con este telefono";
            }

        }
        
    }

    mysqli_close($enlace);
?>