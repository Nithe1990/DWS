<?
    $dom = new DOMDocument();
    $dom->load("mundial.xml");
    $raiz = $dom->childNodes[0];
    $nuevo = "Joao";
    $cambiar = false;
    foreach ($raiz->childNodes as $elementos) {
        if ($elementos->nodeType ==1) {
            foreach($elementos->childNodes as $datos){
                if($datos->nodeType==1 && $datos->nodeValue=="Francia"){
                    $cambiar = true;
                    
                }
                if($cambiar && $datos->nodeName=="Entrenador"){
                    $elementos->replaceChild($nuevo, $datos);
                }
            }
        }
    }
    if($dom->save("mundial.xml")){
        echo "Guardado";
    }
?>