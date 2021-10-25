<?php

$radio = $_GET['Diametro']/2;

$pi = 3.1416;

$altura = $_GET['Altura'];

$volumen = ($pi*($radio*$radio))*$altura;

echo"<br/> &nbsp; El volumen del cilindro es de " .$volumen. " metros cubicos"




?>