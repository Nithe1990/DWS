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
                    <h1 class="text-white">Ejercicio 1</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container position-relative top-0 start-50 translate-middle-x">
    <?
    $liga =
    array(
        "Zamora" =>  array(
            "Salamanca" => array(
                "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
            ),
            "Avila" => array(
                "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
            ),
            "Valladolid" => array(
                "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 1
            )
        ),
        "Salamanca" =>  array(
            "Zamora" => array(
                "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
            ),
            "Avila" => array(
                "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
            ),
            "Valladolid" => array(
                "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 2, "Penalti" => 1
            )
        ),
        "Avila" =>  array(
            "Zamora" => array(
                "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 2
            ),
            "Salamanca" => array(
                "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 3, "Penalti" => 0
            ),
            "Valladolid" => array(
                "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 0, "Penalti" => 1
            )
        ),
        "Valladolid" =>  array(
            "Zamora" => array(
                "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
            ),
            "Salamanca" => array(
                "Resultado" => "3-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
            ),
            "Avila" => array(
                "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 2
            )
        ),
    );

    $arrayEquipos = array();
    foreach ($liga as $equipo => $partido) {
        array_push($arrayEquipos, $equipo);
    }
    $iteracciones = 0;

    echo "<table border>";
        echo "<tr>";
            echo "<th>Equipos</th>";
            foreach ($liga as $equipos => $indice) {
                echo "<th>".$equipos."</th>";
            }
        echo "</tr>";
        foreach ($liga as $local => $partidos) {
            echo "<tr>";
                echo "<td>".$local."</td>";
                foreach ($partidos as $visitante => $resultados) {
                    if(strcmp($local, $arrayEquipos[$iteracciones]) == 0){
                        echo "<td></td>";
                    }
                    echo "<td>"
                        .$resultados['Resultado']."<br>".
                        $resultados['Roja']."-".$resultados['Amarilla']."-".$resultados['Penalti'].
                    "</td>";
                    $iteracciones++;
                }
            echo "</tr>";
            $iteracciones = 0;
        }
    echo "</table>"
    
?>
    </div>
<footer class="text-center">
        Cristian Calvo
    </footer>
</body>
</html>