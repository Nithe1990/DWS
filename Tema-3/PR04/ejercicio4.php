<?
    $valor = (float)$_GET['valor'];
    $pago = 0;
    $monedas = 0;

    if($valor > 200){
        $pago = 500;
    }elseif($valor > 100 || $valor <= 200){
        $pago = 200;
    }elseif($valor >50 || $valor <= 100){
        $pago = 100;
    }elseif ($valor > 20 || $valor <= 50) {
        $pago = 50;
    }elseif($valor > 10 || $valor <= 20){
        $pago = 20;
    }elseif($valor > 5 || $valor <= 10){
        $pago = 10;
    }else{
        $pago = 5;
    }

    echo "Pago: ".$pago."<br>";

    $monedas = $pago/$valor;
    echo $monedas;
?>