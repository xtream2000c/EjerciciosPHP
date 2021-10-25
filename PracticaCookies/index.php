<?php

    if(!isset($_COOKIE["idioma"])){
        $pagina = "idioma.html";
    }
    elseif ($_COOKIE["idioma"]=="sp") {
        $pagina = "español.html";
    }
    else {
        $pagina ="ingles.html";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script language="javascript" type="text/javascript">
        location.href="<?php echo $pagina; ?>"
    </script>
</head>
<body>
    
</body>
</html>