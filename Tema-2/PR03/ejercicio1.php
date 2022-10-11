<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <header></header>
    <ol type="a">
        <li><?echo $_SERVER['PHP_SELF'];?></li>
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
</body>
</html>