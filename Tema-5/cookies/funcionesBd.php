<?
    require './conexion.php';
    //findAll
    function findAll(){
        try {
            $con = new PDO('mysql:host='.HOST.';dbname='.BBDD,USER,PASS);
            $sql = "select * from producto where codigo = ?";
            $prepare = $con -> prepare($sql);
            $res = $prepare->execute(array($id));
            //$array = $res->fetchAll(PDO::FETCH_ASSOC);
            if($res){
                unset($con);
                $res->fetchAll();
            }
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