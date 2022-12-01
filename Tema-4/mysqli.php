<?
    require './conexion.php';
    try{
        $conexion = mysqli_connect(HOST,USER,PASS,"mundial");
        //$_SERVER['SERVER_ADDR']
        mysqli_close($conexion);
    }catch(Exception $ex){
        //dará 2002 en caso de que el host sea incorrecto
        //dará 1045 en caso de que deniegue el acceso porque no reconozca al usuario o contraseña
        echo "Error ".$ex->getCode();
        if($ex->getCode() == 2002){
            echo "<br/>No se ha encontrado el host especificado.";
        }
        if($ex->getCode() == 1045){
            echo "<br/>El usuario o la contraseña son incorrectos.";
        }
    }   
?>