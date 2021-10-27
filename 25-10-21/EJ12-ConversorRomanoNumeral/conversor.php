<?php

$numeroRomano = $_POST['romano'];

$numeros = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1,
);

$resultado = 0;

foreach ($numeros as $key => $value) { // Se recorre el array numeros como claves
    while (strpos($numeroRomano, $key) === 0) { // Las claves se van comparando con el numero para sacar el valor
        $resultado += $value; //Se añade el valor al resultado
        $numeroRomano = substr($numeroRomano, strlen($key)); // Se elimina la parte que ya hemos comprobado
    }
}
echo $resultado;

?>