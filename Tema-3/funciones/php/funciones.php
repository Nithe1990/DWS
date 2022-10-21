<?
    //sin parámetros
    function saludo(){
        echo "Hola";
    }

    //un parámetro
    function saludoDos($nombre){
        echo "Hola, ".$nombre;
    }

    //parámetros tipos de dato "normales" se pasan por valor
    function saludoTres($nombre){
        $nombre = $nombre."valor";
        echo "Hola, ".$nombre;
    }
    function saludoCuatro(){
        global $nombre;
        $nombre = $nombre."valor";
        echo "Hola, ".$nombre;
    }

    function saludoCinco(){}

    function saludoSeis(){}

    //uso de valores por defecto
    function saludoSiete($nombre = "Mundo"){
        echo "Hola, ".$nombre;
    }

    function rellenarArray(&$array){
        array_push($array,date("h:i:s"));
        print_r($array);
    }

    function cambiolado($objeto, lado){
        $objeto->lado;
    }
?>