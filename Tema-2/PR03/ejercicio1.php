<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>.morado{background-color: #6f42c1;} .blanco{color: white;}</style>
    <title>Ejercicio 1</title>
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
    <p>Crea una página que muestra el nombre del fichero que se está ejecutando, muestra la dirección IP del equipo desde el que estás accediendo, muestra el path donde se encuentra el fichero que se está ejecutando, muestra la fecha y hora actual formateada en 2022-09-4 19:17:18, Muestra la fecha y hora actual en Oporto formateada en (día de la semana, día de
        mes de año, hh:mm:ss , Zona horaria), Inicializa y muestra una variable en timestamp y en fecha con formato dd/mm/yyyy
de tu cumpleaños; y calcular la fecha y el día de la semana de dentro de 60 días.</p>
    <ol type="a">
        <li><?echo basename(__FILE__);?></li>
        <li><?echo $_SERVER['REMOTE_ADDR']?></li>
        <li><?echo $_SERVER['SCRIPT_FILENAME']?></li>
        <li><?echo date("Y-m-j G:i:s")?></li>
        <?date_default_timezone_set('Europe/Lisbon');?>
        <li><?echo date("j/m/Y G:i:s")?></li>
        <li><?
            $cumple = strtotime("23/05/1994");
            echo $cumple."<br>";
            echo date("d/m/Y", $cumple);
        ?></li>
        <li><?echo date("d/m/Y",strtotime(date("d/m/Y")."+ 60 days"));?></li>
    </ol>
    <a href="Ejercicio5.php?fichero=ejercicio1.php">Ejercicio 5</a>
</body>
</html>