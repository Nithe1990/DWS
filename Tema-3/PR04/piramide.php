<?
    $filas = 3;
    $pintar = "";

    for ($i=1; $i <= $filas; $i++) { 
        for($j = $i; $j <= $i;$j++){
            $pintar .= "*";
        }
        echo $pintar."<br>";
    }
?>