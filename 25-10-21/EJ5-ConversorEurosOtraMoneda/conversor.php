<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Conversor euros a pesetas</h1>
    <?php

        $euros=$_POST['euros'];
        $moneda=$_POST['moneda'];

        switch ($moneda) {
            case 'pesetas':
                echo $euros . '€ = ' . $euros*166.368 . ' Pestas. <br>';
                break;
            case 'dolarUSA':
                echo $euros . '€ = ' . $euros*1.325 . ' Dolares USA. <br>';
                break;   
            case 'LibraEsterlina':
                echo $euros . '€ = ' . $euros*0.927 . ' Libras Esterlinas. <br>';
                break;  
            case 'yenesJaponeses':
                echo $euros . '€ = ' . $euros*118.232 . ' Yenes Japoneses. <br>';
                break;     
            case 'francosSuizos':
                echo $euros . '€ = ' . $euros*1.515 . ' Francos Suizos. <br>';
                break;  
        }

    ?>
    
    <br>
    <form action="index.html" method="post">
        <input type="submit" value="Volver">
    </form>
    
</body>
</html>