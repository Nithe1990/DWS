<?
    $datosS = str_replace("'","",$_GET['datos']);
    $datos = explode("-", $datosS);
    $datos = array_unique($datos);
    sort($datos);
    foreach ($datos as $elemento) {
        echo $elemento.'<br>';
    }
?>