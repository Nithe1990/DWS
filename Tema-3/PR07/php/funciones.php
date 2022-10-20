<?
    function br(){
        echo "<br>";
    }
    function h1($cadena){
        echo "<h1>" . $cadena . "</h1>";
    }
    function p($cadena){
        echo "<p>" . $cadena . "</p>";
    }
    function self(){
        return basename($_SERVER['PHP_SELF']);
    }
    function letrDni($numero){
        $diccionario = array(
            'T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'
        );
        return $diccionario[$numero % 23];
    }
?>