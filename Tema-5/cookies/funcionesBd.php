<?
    require './conexion.php';
    //findAll
    function findAll(){
        try {
            $con = new PDO('mysql:host='.HOST.';dbname='.BBDD,USER,PASS);
            $sql = "select * from producto";
            $res = $con->query($sql);
            $array = $res->fetchAll(PDO::FETCH_ASSOC);
            unset($con);
            return $array;
        } catch (Exception $ex) {
            print_r($ex);
            unset($con);
            return false;
        }
        
    }

    //uno por id
    function findById($id){

    }

    //find
?>