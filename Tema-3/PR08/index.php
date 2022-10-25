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
    <div class="container">
        <h1>Formulario de registro</h1>
        <form action="./index.php" method="post" enctype="multipart/form-data">
            <?
                if(vacio("nombre1") && enviado()){
                    ?>
                        <span style="color: red;">Debe introducirse un nombre</span>
                    <?
                }
            ?>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nombre1" id="alfabeticoObligatorio" placeholder="">
                <label for="alfabeticoObligatorio">Nombre</label>
            </div>
            <?
                if(vacio("apellido1") && enviado()){
                    ?>
                        <span style="color: red;">Debe introducirse un apellido</span>
                    <?
                }
            ?>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="apellido1" id="alfabeticoOpcional" placeholder="">
                <label for="alfabeticoOpcinal">Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="" id="alfanumericoObligatorio" placeholder="">
                <label for="alfanumericoObligatorio">Nombre opcional</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="" id="alfanumericoOpcional" placeholder="">
                <label for="alfanumericoOpcional">Apellido opcional</label>
            </div>
            <div class="input-group mb-3">
                <label for="fechaObligatoria" class="input-group-text">Fecha</label>
                <input type="date" name="fecha" id="fechaObligatoria" placeholder="">
                <?
                    if(vacio("fecha") && enviado()){
                        ?>
                            <span style="color: red;">Debe introducirse una fecha</span>
                        <?
                    }
                ?>
            </div>
            <div class="input-group mb-3">
                <label for="fechaOpcional" class="input-group-text">Fecha opcional</label>
                <input type="date" name="" id="fechaOpcional" placeholder="">
            </div>
            <p>Radio obligatorio</p>
            <div class="form-check">
                <label class="form-check-label" for="opcion1">Opción 1</label>
                <input class="form-check-input" type="radio" name="gruporadios" id="opcion1">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="opcion2">Opción 2</label>
                <input class="form-check-input" type="radio" name="gruporadios" id="opcion2">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="opcion3">Opción 3</label>
                <input class="form-check-input" type="radio" name="gruporadios" id="opcion3">
            </div>
            <?
                if(!existe("gruporadios") && enviado()){
                    ?>
                        <span style="color: red;">Debe elegir una opción</span>
                    <?
                }
            ?>
            <?
                if (seleccionado("combobox") && enviado()) {
                    ?>
                        <span style="color: red;">Debe elegir una opción</span>
                    <?
                }
            ?>
            <div class="input-group mb-3">
                <label for="combo" class="input-group-text">Elige una opción</label>
                <select class="form-select" id="combo" name="combobox">
                    <option value="0" selected>Seleccione</option>
                    <option value="1">Uno</option>
                    <option value="2">Dos</option>
                    <option value="3">Tres</option>
                </select>
            </div>
            <p>Elige al menos 1 y máximo 3:</p>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="check1" name="checks[]">
                <label class="form-check-label" for="check1">Check 1</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="check2" name="checks[]">
                <label class="form-check-label" for="check2">Check 2</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="check3" name="checks[]">
                <label class="form-check-label" for="check3">Check 3</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="check4" name="checks[]">
                <label class="form-check-label" for="check4">Check 4</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="check5" name="checks[]">
                <label class="form-check-label" for="check5">Check 5</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="check6"name="checks[]">
                <label class="form-check-label" for="check6">Check 6</label>
            </div>
            <?
                if(contarChecks("checks[]") < 1 || contarChecks("checks[]") > 3 && enviado()){
                    ?>
                        <span style="color: red;">Debe elegigir como mínimo una opción y como máximo 3</span>
                    <?
                }
            ?>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="" id="telefono" placeholder="">
                <label for="telefono">Nº Teléfono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="" id="mail" placeholder="">
                <label for="mail">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="" id="contrasenna" placeholder="">
                <label for="contrasenna">Contraseña</label>
            </div>
            <input class="form-control" type="file" id="fichero">
            <input type="submit" name="enviar" class="btn btn-primary" value="Enviar">
        </form>
    </div>
    <footer class="text-center">
        Cristian Calvo
    </footer>
</body>
</html>