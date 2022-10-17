<?
    $datosS = str_replace("'","",$_GET['datos']);
    $datos = explode("-", $datosS);

    foreach ($datos as $indice => $valor) {
        if($valor == 3) $valor = $indice;
        echo $valor."<br>";
    }
?>