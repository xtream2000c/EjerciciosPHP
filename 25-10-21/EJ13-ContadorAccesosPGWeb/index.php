<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La pagina ha sido visitada: 
        <?php
    
        if(!isset($_COOKIE["visita"])){

            setcookie("visita", $visitas = 1, time()+3600);
            
            echo " Esta es su primera vez";

        }else{

            $visitas = ++ $_COOKIE["visita"];
            setcookie("visita", $visitas, time()+3600);

            echo $_COOKIE["visita"]." Veces";
            
        }    
        
        ?>
    </h1>
</body>
</html>