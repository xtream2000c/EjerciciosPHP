<?php

    $email=$_POST['Email'];
    $pass=$_POST['pass'];
    
    $contraCorrecta=preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pass);
    
    if($email!=null && $pass!=null){

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "El email no es valido";
            }
            else{
    
                if ($contraCorrecta){}
                        echo 'La contraseña no es valida vuelva a intentarlo'
                    }
                else{
                    $con = mysqli_connect('localhost', 'root', '', 'accesos');
                    if(mysqli_connect_errno()){
                        echo "Fail to connect" .mysqli_connect_error();
                        exit();
                    }
                    else{
                        $result = mysqli_query($con ,"SELECT * FROM logins WHERE Usuario = '$email' AND Passwords = '$pass'");
                        if($result){
                            if(mysqli_num_rows($result)){
                                echo "Acceso concedido";
                            }
                            else{
                                echo "Usuario o contraseña erroneos";
                            }
                            mysqli_free_result($result);
                        }
                    }
                    mysqli_close($con);
                }
            }
    }
    else{
        echo "Los campos no estan rellenos.";
    }
    
?>
