<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<header>
        <div class="container" id="cabecera" style="background-color: #6f42c1;">
            <div class="row">
                <div class="col-auto">
                    <a href="../EligeFichero.php"><img src="../imagenes/c.png" class="rounded-circle" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    
    <div class="col text-center">
        <form action="" method="post" enctype="multipart/form-data">
            <textarea name="contenido" id="contenido" rows="10"><?
                    $ubicacion = "../archivos/".$_REQUEST["fichero"];
                    $archivo = fopen($ubicacion, "a+");
                    fseek($archivo, 0, SEEK_SET);
                    $contenido = fread($archivo, filesize($ubicacion));
                    fclose($archivo);
                    echo $contenido;
                ?>
            </textarea><br>
            <input type="submit" value="Modificar" name="modificar">
        </form>
    </div>
</body>
</html>

<?
?>