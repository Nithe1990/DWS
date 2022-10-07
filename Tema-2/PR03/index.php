<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR03</title>
</head>
<body>
    <header></header>
    <ol type="1">
        <li><ol type="a">
            <li><?echo $_SERVER['PHP_SELF'];?></li>
            <li><?echo $_SERVER['REMOTE_ADDR']?></li>
            <li><?echo $_SERVER['SCRIPT_FILENAME']?></li>
            <li><?echo date("Y-m-j G:i:s")?></li>
            <?date_default_timezone_set('Europe/Madrid');?>
            <li><?echo date("j/m/Y G:i:s")?></li>
            <li><??></li>
        </ol></li>
    </ol>
</body>
</html>