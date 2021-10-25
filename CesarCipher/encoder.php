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
$mensajeaencriptar = $_POST['mensaje'];

$key = array(
    "A" => "B", "B" => "C","C" => "D", "D" => "E","E" => "F","F" => "G",
    "G" => "H", "H" => "I", "I" => "J", "J" => "K","K" => "L",
    "L" => "M","M" => "N", "N" => "Ñ", "Ñ"=>"O", "O" => "P", 
    "P" => "Q","Q" => "R", "R" => "S","S" => "T","T" => "U", 
    "U" => "V", "V" => "W", "W" => "X", "X" => "Y",
    "Y" => "Z", "Z" => "Å", "Å" => "Ä", "Ä" => "Ö", "Ö" => "A"
);

$longitud=strlen($mensajeaencriptar);
$encriptado='';

echo $mensajeaencriptar ."<br>";

for ($i=0; $i < $longitud; $i++) { 

    if (is_array($key) && in_array(strtoupper($mensajeaencriptar[$i]), array_flip($key))){

        $encriptado .= $key[strtoupper($mensajeaencriptar[$i])];

    }        
}

echo $encriptado;

?>
</body>
</html>