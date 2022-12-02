<?
    require './conexion.php';
    //con funciones
    try{
        $conexion = mysqli_connect(HOST,USER,PASS,"mundial");
        //$_SERVER['SERVER_ADDR']
        //$sql = "select * from equipo";
        $sqlp = "select * from equipo where id = ? and nombre = ?";
        $preparada = mysqli_stmt_init($conexion);
        mysqli_stmt_prepare($preparada,$sqlp);
        //$resultado = mysqli_query($conexion, $sqlp,);
        $id = 1;
        $nombre = "España";
        mysqli_stmt_bind_param($preparada,'is',$id,$nombre);
        mysqli_stmt_execute($preparada);
        mysqli_stmt_bind_result($preparada, $r_id, $r_nombre);
        while(mysqli_stmt_fetch($preparada)){
            echo "<br/>Id: ".$r_id.", nombre: ".$r_nombre;
        }
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
        echo " ".$ex->getMessage();
    }

    try {
        $conexion = mysqli_connect(HOST,USER,PASS,"mundial");
        $sql = "insert into equipo values(?,?)";
        $preparada = mysqli_stmt_init($conexion);
        mysqli_stmt_prepare($preparada, $sql);
    } catch (Exception $ex) {
        echo "Error ".$ex->getCode().": ".$ex->getMessage();
    }

    //transacciones
    try {
        $conexion = mysqli_connect(HOST,USER,PASS,"mundial");
        mysqli_autocommit($conexion, false);
        $sql = "insert into equipo values(4,\"Alemania\");";
        $sql1 = "insert into equipo values(5,\"Rusia\");";
        $sql2 = "insert into equipo values(5,\"Brasil\");";
        mysqli_query($conexion, $sql);
        mysqli_query($conexion, $sql1);
        //mysqli_query($conexion, $sql2);
        mysqli_commit($conexion);
    } catch (Exception $ex) {
        echo "Error ".$ex->getCode().": ".$ex->getMessage();
        mysqli_rollback($conexion);
    }finally{
        mysqli_close($conexion);
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