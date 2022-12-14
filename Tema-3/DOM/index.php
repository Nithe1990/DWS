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
    <?
        $dom = new DOMDocument();
        $dom->load('departamento.xml');
        //leerRaíz
        $raiz = $dom->childNodes[0];
        echo "Raíz: ".$raiz->nodeName;

        //número de hijos de la raíz
        foreach($raiz->childNodes as $elementos){
            if($elementos->nodeType == 1){
                echo "<br>".$elementos->nodeName;
                foreach($elementos as $datos){
                    if($datos->nodeType == 1){
                        echo "<br>Nombre: ".$datos->nodeName." Valor: ".$datos->nodeValue;
                    }
                }
            }
        }
    ?>
    <footer class="text-center">
        Cristian Calvo
    </footer>
</body>
</html>