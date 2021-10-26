<?php

    $nombre = $_POST['nombre'];

    $palabras = explode('.',strtoupper($nombre));
    $extension = $palabras['1'];

    echo "a) <h1>".$extension."</h1>";

    echo "b) El documento es de tipo: ";

    switch($extension){
        case 'PDF':
            echo "<b> Documento Adobe PDF </b>" ;
        break;
        case 'TXT':
            echo "<b> Documento De Texto </b>" ;
        break;
        case 'HTML':
            echo "<b> Documento HTML </b>" ;
        break;
        case 'HTM':
            echo "<b> Documento HTML </b>" ;
        break;
        case 'PPT':
            echo "<b> Presentacion Microsoft Powerpoint </b>" ;
        break;
        case 'DOC':
            echo "<b> Documento Microsoft Word </b>" ;
        break;
        case 'GIF':
            echo "<b> Imagen Gif </b>" ;
        break;
        case 'PPT':
            echo "<b> Imagen JPG </b>" ;
        break;
        case 'DOC':
            echo "<b> Archivo comprimido ZIP </b>" ;
        break;
        default:
            echo "Archivo ". $extension;
        break;
}

?>