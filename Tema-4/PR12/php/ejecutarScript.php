<?
require 'conexion.php'; 
    try {
        $conexion = mysqli_connect(HOST,USER,PASS);
        $script = file_get_contents("../poke.sql");
        mysqli_multi_query($conexion,$script);
        mysqli_close($conexion);
        $conexion = mysqli_connect(HOST,USER,PASS,BBDD);
        $consulta = "select * from poke";
        $resultado = mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        print_r($resultado->fetch_all());

    } catch (Exception $ex) {
        echo "Error ".$ex->getCode().": ".$ex->getMessage();
        if($ex->getCode() == 2002){
            echo "<br/>No se ha encontrado el host especificado.";
        }
        if($ex->getCode() == 1045){
            echo "<br/>El usuario o la contraseña son incorrectos.";
        }
    }
?>