<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Recibe</title>
</head>
<body>
    <header>
        <div class="container" id="cabecera" style="background-color: #6f42c1;">
            <div class="row">
                <div class="col-auto">
                    <a href="../index.html"><img src="../imagenes/c.png" class="rounded-circle" alt=""></a>
                </div>
                <div class="col text-center">
                    <h1 class="text-white">Índice</h1>
                </div>
            </div>
        </div>
    </header>  
</body>
</html>
<?
    echo '<div class="container">';
    echo "Nombre: ".$_REQUEST['nombre']."<br/>";
    echo "Contraseña: ".$_REQUEST['contrasenna']."<br/>";
    if(isset($_REQUEST['genero'])){
        echo "Género:".$_REQUEST['genero'];
    }else{
        echo "No se ha especificado el género";
    }
    if (isset($_REQUEST["asignaturas"])) {
        echo "<br>Asignaturas: ";
        foreach ($_REQUEST["asignaturas"] as $key => $value) {
            echo $value." - ";
        }
    }else {
        echo "<br>Ninguna asignatura";
    }
    echo "<br/>";
    // print_r($_REQUEST);
    // echo "<br>";
    // print_r($_FILES);
    
    $ubicacion = "/var/www/html/DWS/Tema-3/formularios/uploads/";
    $nombreTemoporal = basename($_FILES['fichero']['name']);
    $ubicacion = $ubicacion.$nombreTemoporal;

    if(move_uploaded_file($_FILES['fichero']['tmp_name'], $ubicacion)){
        echo "<br/>Fichero subido<br/>";
    }else{
        echo "<br/>Fallo en la subida del fichero<br/>";
    }
    echo '</div>';
?>