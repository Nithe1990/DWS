<?
    if(isset($_SERVER["PHP_AUTH_USER"])){
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
        header('HTTP/1.0 401 Unauthorized');
        echo "No autorizado";
    }elseif($_SERVER['PHP_AUTH_USER'] == 'dwes' && $_SERVER['PHP_AUTH_PW'] == 'cristian'){
        header('Location: ./permiso.php');
    }else{
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
        header('HTTP/1.0 401 Unauthorized');
        echo "No autorizado";
    }
?>