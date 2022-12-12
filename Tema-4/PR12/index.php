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
        <?
            require 'php/conexion.php';
            require 'php/ejecutarScript.php';

            try {
                $conexion = mysqli_connect(HOST,USER,PASS,BBDD);
                $consulta = "select * from poke";
                $resultado = mysqli_query($conexion, $consulta);
                mysqli_close($conexion);
                print_r($resultado->fetch_all());
            } catch (Exception $ex) {
                echo "Error ".$ex->getCode().": ".$ex->getMessage();
                if($ex->getCode() == 2002){
                    echo "<br/>No se ha encontrado el host especificado.";
                }
                if($ex->getCode() == 1045){
                    echo "<br/>El usuario o la contraseña son incorrectos.";
                }
            }
        ?>
    </div>
    <footer class="text-center">
        Cristian Calvo
    </footer>
</body>
</html>