<?
    require("./php/validaciones.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link rel="manifest" href="">
    <title></title>
</head>
<body>
    <header>
        <div class="container" id="cabecera" style="background-color: #6f42c1;">
            <div class="row">
                <div class="col-auto">
                    <img src="imagenes/c.png" class="rounded-circle" alt="">
                </div>
                <div class="col text-center">
                    <h1 class="text-white">Índice</h1>
                </div>
            </div>
        </div>
    </header>
    <form class="container" action="" method="post" enctype="multipart/form-data">
        <label for="nombre" class="form-label" value="">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="<?
            if (enviado() && !vacio("nombre")) {
                echo $_REQUEST["nombre"];
            }
        ?>"/>
        <label for="apellidos" class="form-label">Apellidos: </label>
        <input type="text" name="apellidos" id="apellidos" value="<?
            if (enviado() && !vacio("apellidos")) {
                echo $_REQUEST["apellidos"];
            }
        ?>"/>
        <?
            $patronN = "/.{3}/";
            $patronA = "/^.{3}\s.{3}$/";
            if(vacio("nombre") && enviado()){
                ?><span style="color: red;">Debe introducirse un nombre&nbsp;</span><?
            }elseif (!preg_match($patronN,$_REQUEST["nombre"])) {
                ?><span style="color: red;">El nombre debe tener al menos 3 caracteres</span><?
            }
            if(vacio("apellidos") && enviado()){
                ?><span style="color: red;">&nbsp;Deben introducirse los apellidos</span><?
            }elseif(!preg_match($patronA,$_REQUEST["apellidos"])){
                ?><span style="color: red;">Los apellidos deben tener como mínimo 3 espacios cada uno, y estar separados por un espacio</span><?
            }
        ?><br/>
        <label for="contrasena">Contraseña: </label>
        <input type="password" name="contrasena" id="contrasena" value="<?
            if (enviado() && !vacio("contrasena")) {
                echo $_REQUEST["contrasena"];
            }
        ?>"/>
        <?
            if (vacio("contrasena") && enviado()) {
                ?><span style="color: red;">&nbsp;Debe introducirse una contraseña</span><?
            }
        ?><br/>
        <label for="rContrasena">Repetir contraseña: </label>
        <input type="password" name="rContrasena" id="rContrasena" value="<?
            if (enviado() && !vacio("rContrasena")) {
                echo $_REQUEST["rContrasena"];
            }
        ?>"/>
        <?
            if(vacio("rContrasena") && enviado()){
                ?><span style="color: red;">&nbsp;Repita contraseña</span><?
            }
        ?>
        <br/>
        <label for="nacimiento">Fecha de nacimiento: </label>
        <input type="text" name="nacimiento" id="nacimiento" value="<?
            if (enviado() && !vacio("nacimiento")) {
                echo $_REQUEST["nacimiento"];
            }
        ?>"/>
        <?
            $patron = "/^[0-9]{2}[\/|\-][0-9]{2}[\/|\-][0-9]{4}$/";
            $hoy = time();
            if(vacio("nacimiento") && enviado()){
                ?><span style="color: red;">&nbsp;Debe introducirse su fecha de nacimiento</span><?
            }elseif(!preg_match($patron, $_REQUEST["nacimiento"])){
                ?><span style="color: red;">&nbsp;La fecha debe tener formaro dd/mm/yyyy o dd-mm-yyyy</span><?
                $fechaIntroducida = strtotime(date("d-m-Y", $_REQUEST["nacimiento"]));
                
            }
        ?><br/>
        <label for="dni">D.N.I.: </label>
        <input type="text" name="dni" id="dni" value="<?
            if (enviado() && !vacio("dni")) {
                echo $_REQUEST["dni"];
            }
        ?>"/>
        <?
            if(vacio("dni") && enviado()){
                ?><span style="color: red;">&nbsp;Debe introducirse un D.N.I.</span><?
            }
        ?><br/>
        <label for="mail">Correo electrónico: </label>
        <input type="text" name="mail" id="mail" value="<?
            if (enviado() && !vacio("mail")) {
                echo $_REQUEST["mail"];
            }
        ?>"/>
        <?
            if(vacio("mail") && enviado()){
                ?><span style="color: red;">&nbsp;Debe introducirse un eMail</span><?
            }
        ?>
        <br/>
        <label for="img">Imagen: </label>
        <input type="file" name="img" id="img"/>
        <?
            $ubicacion = "/var/www/html/DWS/Tema-3/PR09/";
            $nombreTemporal = basename($_FILES['img']['name']);
            $tmp_name = $_FILES["img"]["tmp_name"];
            $ubicacion = $ubicacion.$nombreTemporal;

            if(move_uploaded_file($_FILES['img']["tmp_name"], $ubicacion)){
                ?><span style="color: cyan;">&nbsp;Se ha subido</span><?
            }else{
                ?><span style="color: red;">&nbsp;Ha fallado</span><?
            }
        ?><br/>
        <input type="submit" name="enviar" value="Enviar"/>
    </form>
    <footer class="text-center">
        Cristian Calvo
    </footer>
</body>
</html>