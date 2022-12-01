<?
    require './conexion.php';
    //con funciones
    try{
        $conexion = mysqli_connect(HOST,USER,PASS,"mundial");
        //$_SERVER['SERVER_ADDR']
        $sql = "select * from equipo";
        $sqlp = "select * from equipo where id = ? and nombre = ?";
        $preparada = mysqli_stmt_init($conexion);
        mysqli_stmt_prepare($preparada,$sql);
        $resultado = mysqli_query($conexion, $sqlp,);
        $id = 1;
        $nombre = "España";
        mysqli_stmt_bind_param($preparada,'i',$id);
        mysqli_stmt_bind_param($preparada,'s',$nombre);
        mysqli_stmt_execute($preparada);
        //print_r($resultado->fetch_all());
        echo "<br>";
        // while($row = $resultado->fetch_array()) print_r($row);
        // while($row = $resultado->fetch_object()) print_r($row);
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

    // try {
    //     $conexionO = new mysqli();
    //     $conexionO -> connect($_SERVER['SERVER_ADDR'], USER, PASS, 'mundial');
    //     $conexionO -> close();
    // } catch (Exception $ex) {
    //     echo $conexionO -> connect_errno;
    //     echo $conexionO -> connect_error;
    // }
?>