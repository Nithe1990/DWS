<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prueba de php con html</h1>
    <?
        echo("Hola mundo<br>");
        print '¿Qué tal?';
    ?>
    <h1>Tipos de dato</h1>
    <?
        var_dump("Cristian");
        echo("<br>");
        var_dump(2);
        echo("<br>");
        var_dump(2.8);
        echo("<br>");
        var_dump(false);
    ?>
    <h2>Obtener tipo</h2>
    <?
        $variable = 3;
        echo(gettype($variable));
    ?>
    <h1>Variables</h1>
    <?
        $variable = 7;
        var_dump($variable);
        echo("<br>");
        $variable = "hi";
        var_dump($variable);
        echo("<br>");
        $variable = 5.5;
        var_dump($variable);
        echo("<br>");
        $nueva = (int)$variable;
        var_dump($nueva);
        echo("<br>");
        $inexistente = null;
        $variable = is_null($inexistente);
        echo($variable);
    ?>
    <h2>Variable de variable</h2>
    <?
        $viernes = "fiesta";
        $$viernes = "copas";
        echo($viernes);
        echo("<br>");
        echo($fiesta);
    ?>
    <h1>GET</h1>
    <?

    ?>
    <h2>Valor y Referencia</h2>
    <?
        $var = 1;
        $var1 = $var;
        echo $var."<br>";
        echo $var1."<br>";
        $var1 = $var1 + 1;
        echo $var."<br>";
        echo $var1."<br>";
        echo "<br>";
        $var = 1;
        $var1 = &$var;
        echo $var."<br>";
        echo $var1."<br>";
        $var1 = $var1 + 1;
        echo $var."<br>";
        echo $var1."<br>";
    ?>

    <h2>Ámbito</h2>
    <?
        $global = 1;
        function cambio(){
            $global = 2;
            echo "El valor dentro de la función es " .$global ."<br>";
        }
        cambio();
        echo "El valor de global es " .$global;
    ?>
    <h2>Variables de función</h2>
    <?
        function crearCoches(){
            static $vecesCreada = 0;
            $vecesCreada = $vecesCreada + 1;
            echo "<br>Se ha creado un coche";
            echo "<br>Llevo creados " .$vecesCreada ." coches";
        }
        crearCoches();
        crearCoches();
    ?>
    <h1>Variables superglobales</h1>
    <h2>Server</h2>
    <?
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";
    ?>
    <h2>Get, Post y request</h2>
    <h2>Cookie</h2>
    <h2>Enviroment</h2>
    <?
        echo "<pre>";
        var_dump(getenv());
        echo "</pre>";
    ?>
    <h2>Session</h2>
    <?
        session_start();
    ?>
    <h1>Fechas</h1>
    <p>date()</p>
    <?
        echo(time());
    ?>
    <p>Para establecer y mostrar la zona horaria</p>
    <?
        date_default_timezone_set('Europe/Madrid');
        echo(date_default_timezone_get());
    ?>
    <?
        echo "<br>Fecha actual: ";
        echo date("d m Y");
        echo "<br>Fecha actual en entero: ";
        echo strtotime("now");

    ?>
    <?
        echo "<br>";
        echo date("d/m/Y", strtotime("2022-04-10"));
        echo "<br>"
    ?>
    <?
        echo mktime(0,0,0,10,4,2022);
        echo "<br>diferencia entre fechas<br>";
        $primera = mktime(0,0,0,10,11,1994);
        $segunda = strtotime("2022-10-4");
        $dif =$segunda - $primera;
        $anos = $dif / (60*60*24*365);
    ?>
</body>
</html>