<?
    require("./php/validaciones.php");
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <style>
        *,
        input {
            margin: 10px;
        }
    </style>
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
    <?php
    $array = array(
        "1DAM" => array("ENDE", "BD", "LM", "SI", "FOL"),
        "2DAM" => array("DI", "SGE", "ACDA", "EIE", "PSP"),
        "2DAW" => array("DWES", "DWEC", "DIW", "EIE")
    );

    ?>
    <form action="./Examenhtml.php" method="post">
        <label for="nombre">Nombre y apellidos:</label>
        <input type="text" name="nombre" id="nombre" value="<?
            if (enviado() && !vacio("nombre")){
                echo $_REQUEST["nombre"];
            }
        ?>">
        <?
            $patronN = '/^[A-Z][a-z].{2,}\s[A-Z][a-z].{2,}\s[A-Z][a-z].{2,}$/';
            if(vacio("nombre") && enviado()){
                ?><span style="color: red;">Debe introducirse un nombre y dos apellidos&nbsp;</span><?
            }elseif (!preg_match($patronN,$_REQUEST["nombre"])) {
                ?><span style="color: red;">Deben escribirse el nombre y ambos apellidos, con al menos 3 letras cada uno, siendo la primera de cada mayúscula</span><?
            }
        ?>
        <br> <label for="exp">Expediente</label>
        <input type="text" name="exp" id="exp" value="<?
            if (enviado() && !vacio("exp")){
                echo $_REQUEST["exp"];
            }
        ?>">
        <?
            $patronE = '/^[0-9]{2}[A-Z]{3}\/[0-9]{2}$/';
            if(vacio("exp") && enviado()){
                ?><span style="color: red;">Debe introducirse un expediente&nbsp;</span><?
            }elseif (!preg_match($patronE,$_REQUEST["exp"])){
                ?><span style="color: red;">El expediente debe incluír 2 dígitos, 3 letras mayúsculas, una barra "/", y 2 dígitos</span><?
            }
        ?>
        <br> <label for="curso">Curso:</label> <select name="curso" id="curso">
            <option value="no">Selecione una opcion</option>
            <?
                foreach ($array as $elemento => $value) {
                    echo "<option value='>".$elemento."'>".$elemento."</option>";
                }
            ?>
        </select>
        <?
            foreach ($array as $elemento => $valor) {
                if ($elemento == $_REQUEST["curso"]) {
                    foreach ($valor as $value) {
                        echo "input type = 'checkbox' name = 'check[]' id = '".$value."' value='".$value."'>";
                        echo "<label for='".$value."'>".$value."</value>";
                    }
                }
            }
        ?>
        <input type="hidden" name="curso" value="">
        <br><input type="submit" name="Enviado" value="Enviar">
    </form>



</body>

</html>