<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $con = mysqli_connect('localhost', 'root', '', 'crud');

       ;

        if(mysqli_connect_errno()){
            echo "Fail to connect" .mysqli_connect_error();
            exit();
        }
        else{
            if($result = mysqli_query( $con ,"SELECT * FROM alumnos")){
                echo "Las filas devueltas son: ".mysqli_num_rows($result);
                mysqli_free_result($result);
            }

        }

        mysqli_close($con);

    ?>
</body>
</html>