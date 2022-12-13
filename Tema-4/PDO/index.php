<?
    require './conexion.php';

    try {
        $conexion = new PDO('mysql:host='.HOST.';dbname='.BBDD,USER,PASS);
        //echo $conexion -> getAttribute(PDO::ATTR_CLIENT_VERSION);
        $consulta = "select * from poke";
        $resultado = $conexion -> query($consulta);
        echo "Numero de Pokémon".$resultado->rowCount()."<br/>";
        while($row = $resultado->fetch(PDO::FETCH_BOTH)){
            echo "<pre>";
            print_r($row);
            echo "</pre>";
        }
    } catch (PDOException $ex) {
        echo "Error: ";
        print_r($ex);
    }finally{
        unset($conexion);
    }
?>