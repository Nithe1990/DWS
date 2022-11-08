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
    <?
        //abrir un fichero si existe. Debe comprobarse si existe en caso de que se abra para lectura (r)
        //(se intenta crear automáticamente si se abre en modo de escritura [w])
        $URL = "../miArchivo.txt";
        if (file_exists($URL)) {
            echo "existe";
            if(!$fp = fopen($URL, 'r')){
                echo "<br/>Ha habido un problema al abrir el fichero";
            }else{
                //leer el fichero entero
                $leido = fread($fp, filesize($URL));
                echo "<br/>".$leido;
                fclose($fp);
            }
        }else{
            echo "no existe";
        }
    ?>
    <?
        $URL = "../miArchivo.txt";
        if (file_exists($URL)) {
            echo "existe";
            if(!$fp = fopen($URL, 'r')){
                echo "<br/>Ha habido un problema al abrir el fichero";
            }else{
                //leer el fichero línea a línea
                while($lea = fgets($fp)){
                    echo "<br/>".$lea;
                }
                fclose($fp);
            }
        }else{
            echo "no existe";
        }
    ?>
    <?
        $URL = "../miArchivo.txt";
        if (file_exists($URL)) {
            echo "existe";
            //modo adición
            if(!$fp = fopen($URL, 'a+')){
                echo "<br/>Ha habido un problema al abrir el fichero";
            }else{
                //escribe (al final del fichero)
                fwrite($fp, " chao pescao");
                fclose($fp);
            }
        }else{
            echo "no existe";
        }
    ?>
</body>
</html>