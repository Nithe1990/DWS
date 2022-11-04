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
            if (enviado() && !vacio("nombre")) {
                echo $_REQUEST["nombre"];
            }
        ?>"/><br/>
        <label for="contrasena">Contraseña: </label>
        <input type="password" name="contrasena" id="contrasena" value="<?
            if (enviado() && !vacio("nombre")) {
                echo $_REQUEST["nombre"];
            }
        ?>"/><br/>
        <label for="rContrasena">Repetir contraseña: </label>
        <input type="password" name="rContrasena" id="rContrasena" value="<?
            if (enviado() && !vacio("nombre")) {
                echo $_REQUEST["nombre"];
            }
        ?>"/><br/>
        <label for="nacimiento">Fecha de nacimiento: </label>
        <input type="text" name="nacimiento" id="nacimiento"/ value="<?
            if (enviado() && !vacio("nombre")) {
                echo $_REQUEST["nombre"];
            }
        ?>"><br/>
        <label for="dni">D.N.I.: </label>
        <input type="text" name="dni" id="dni" value="<?
            if (enviado() && !vacio("nombre")) {
                echo $_REQUEST["nombre"];
            }
        ?>"/><br/>
        <label for="mail">Correo electrónico: </label>
        <input type="text" name="mail" id="mail" value="<?
            if (enviado() && !vacio("nombre")) {
                echo $_REQUEST["nombre"];
            }
        ?>"/><br/>
        <label for="img">Imagen: </label>
        <input type="file" name="img" id="img"/><br/>
        <input type="submit" name="enviar" value="Enviar"/>
    </form>
    <footer class="text-center">
        Cristian Calvo
    </footer>
</body>
</html>