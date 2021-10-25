<?php

    $con = mysqli_connect('localhost', 'root', '', 'accesos');

    $email=$_POST['Email'];
    $pass=$_POST['pass'];

    
    $contraCorrecta=preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pass);

    if($email!=null && $pass!=null){

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
            echo "El email no es valido";
    
            }
            else{
    
                if ($contraCorrecta){
    
                        echo 'La contraseña no es valida vuelva a intentarlo';
    
                    }
                else{
    
                    echo 'Registro Correcto';
    
                }
            }

    }
    else{
        echo "Los campos no estan rellenos.";
    }
?>
