require "./conexion.php/";
<?
    
    try {
        $conexion = mysqli_connect(HOST,USER,PASS);
        $script = file_get_contents("./banco.sql");
        mysqli_multi_query($conexion,$script);
        mysqli_close($conexion);
    } catch (Exception $ex) {
        echo "Error ".$ex->getCode().": ".$ex->getMessage();
    }
?>