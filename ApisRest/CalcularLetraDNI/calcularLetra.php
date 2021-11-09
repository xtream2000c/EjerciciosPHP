<?php //IMPORTANTE: ELIMINA EL ESPACIO ANTES DE LA
INTERROGACIÓN

// Instanciamos un nuevo servidor SOAP

$uri="https://www.raulprietofernandez.net/images/blog/211/DNI/";

$server = new SoapServer(null,array('uri'=>$uri));

$server->addFunction("letra");

$server->handle();

// Función para obtener raíz cuadrada

function letra($dni) {

$resultado=substr("TRWAGMYFPDXBNJZSQVHLCKE",$dni%23,1);

return $resultado;

}

?>