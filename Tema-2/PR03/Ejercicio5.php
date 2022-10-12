<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>.morado{background-color: #6f42c1;} .blanco{color: white;}</style>
    <title>Ejercicio 5</title>
</head>
<body>
    <header>
        <div class="container-fluid morado">
                <table><tr>
                    <td><a href="index.html"><img src="imágenes/c.jpg" class="rounded-circle" width="100" height="auto"></a></td>
                    <td><h1 class="blanco text-center">Cristian Calvo</h1></td>
                </tr></table>
            </div>
    </header>
    <p>Crea un enlace a una página en cada página anterior que muestre el contenido del fichero
        que se está ejecutando.</p>
    <?
        $nombreFichero = $_GET['fichero'];
        $fichero = fopen($nombreFichero,"r");
        $contenido = fread($fichero,filesize($nombreFichero));

        echo "<p>Contenido de ".$nombreFichero.": </p><br>".$contenido;
    ?>
</body>
</html>