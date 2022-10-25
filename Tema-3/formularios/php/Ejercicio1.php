<?
    require("./validaciones.php");
?>
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
                    <a href="../index.html"><img src="../imagenes/c.png" class="rounded-circle" alt=""></a>
                </div>
                <div class="col text-center">
                    <h1 class="text-white">Índice</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
    <form action="./Ejercicio1.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="idNombre">Nombre</label>
            <input type="text" name="nombre" id="idNombre" placeholder="Pon el nombre" value="<?
                    if (enviado() && !vacio("nombre")) {
                        echo $_REQUEST["nombre"];
                    }
                ?>"/>
        </p>
        <?
            if(vacio("nombre") && enviado()){
                ?>
                    <span style="color: red;">Debe introducirse un nombre</span>
                <?
            }
        ?>
        <p>
            <label for="contrasenna">Contraseña</label>
            <input type="password" name="contrasenna" id="contrasenna" value="<?
                if (enviado() && !vacio("contrasenna")) {
                    echo $_REQUEST["contrasenna"];
                }
            ?>">
        </p>
        <?
            if(vacio("contrasenna") && enviado()){
                ?>
                    <span style="color: red;">Debe introducirse la contraseña</span>
                <?
            }
        ?>
        <p>Género: 
            <label for="generoFem">Femenino</label>
            <input type="radio" name="genero" id="generoFem" value="femenino"
            <?php
                if(enviado() && existe("genero") && $_REQUEST["genero"] == "femenino")
                echo "checked"
            ?>
            >
            <label for="generoMas">Masculino</label>
            <input type="radio" name="genero" id="generoMas" value="masculino"
            <?php
                if(enviado() && existe("genero") && $_REQUEST["genero"] == "masculino")
                echo "checked"
            ?>
            >
        </p>
        <?
            if(!existe("genero") && enviado()){
                ?>
                    <span style="color: red;">Debe elegir un género</span>
                <?
            }
        ?>
        <p>
            Asignaturas:
            <label for="idWES">Desarrollo Web Servidor</label>
            <input type="checkbox" name="asignaturas[]" id="idWES" value="DWES"/>
            <label for="idWEC">Desarrollo Web Cliente</label>
            <input type="checkbox" name="asignaturas[]" id="idWE" value="DWEC">
        </p>
        <p>Curso: 
            <select name="curso" id="curso">
                <option value="0">Selecciona una opción</option>
                <option value="1">Primero</option>
                <option value="2">Segundo</option>
            </select>
        </p>
        <p>
            <input type="file" name="fichero" id="idFichero">
        </p>
        <p><input type="submit" value="Enviar" name="enviar"/>&nbsp;&nbsp;&nbsp;<input type="reset" value="Reiniciar"></p>
    </form>
    </div>
</body>
</html>