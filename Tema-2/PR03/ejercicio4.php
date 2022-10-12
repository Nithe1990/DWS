<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>.morado{background-color: #6f42c1;} .blanco{color: white;}</style>
    <title>Ejercicio 4</title>
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
    <p>Crea una página en la que se le pase como parámetros en la URL (ano, mes y día) de dos
        personas y muestre las fechas de nacimiento de ambos y la diferencia de edad en años.</p>
    <?
        $fecha1 = strtotime($_GET['fecha1']);
        $fecha2 = strtotime($_GET['fecha2']);
        $diferencia = floor(abs($fecha1-$fecha2)/(365*60*60*24));

        echo $_GET['fecha1']."<br>".$_GET['fecha2']."<br>";
        echo "Diferencia: ".$diferencia." años<br>";
    ?>
    <a href="Ejercicio5.php?fichero=ejercicio1.php">Ejercicio 5</a>
</body>
</html>