<?
    $dom = new DOMDocument("1.0, utf-8");
    $dom->formatOutput;
    $raiz = $dom->createElement("Mundial");
    $dom->appendChild($raiz);

    $equipo = $dom->createElement("Equipo");
    $raiz->appendChild($equipo);
    $nombre = $dom->createElement("Nombre");
    

    if($dom->save("mundial.xml")){
        echo "mundial.xml se ha guardado satisfactoriamente";
    }else{
        echo "ha habido un error durante la escritura del fichero";
    }
?>