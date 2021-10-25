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
        
        for ($numero = 1; $numero <= 100; $numero++) {
            if($numero%2==0){
                echo $numero ."<br>";
            }
        }

    ?>
</body>
</html>