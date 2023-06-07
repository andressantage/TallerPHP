<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sistemaSolar = array(
            "Sol" => 'Deshabitado',
            "Mercurio" => 'Deshabitado',
            "Venus" => 'Deshabitado',
            "Tierra" => 'Deshabitado',
            "Marte" => 'Deshabitado',
            "Júpiter" => 'Deshabitado',
            "Saturno" => 'Deshabitado',
            "Urano" => 'Deshabitado',
            "Neptuno" => 'Deshabitado',
            "Plutón" => 'Deshabitado'
        );
        $cantidad = $_POST['valor'];
        $i = -1;
        foreach ($sistemaSolar as $clave => $valor) {
            $i = $i + 1;
            if ($i <= ($cantidad-1)) {
                $planetasSeleccionados[$clave] = 'Habilitado';
            }
        }
/* 
        foreach ($sistemaSolar as $clave => $valor) {
            $i = $i + 1;
            if ($i <= $cantidad) {
                $planetasSeleccionados[$clave] = 'Habilitado';
            }
        } */
        /* echo "<pre>";
        var_dump($planetasSeleccionados);
        echo "</pre>"; */
    }
    /**
     * 2)
     * Supongamos que estás creando un juego de simulación
    *espacial y necesitas crear un sistema solar básico. Decides
    *que cada sistema solar en tu juego debe tener un cierto
    *númerodeplanetascuandosecrea.
     */

    /**
     * Paso1:Decidircuántosplanetastendráel sistemasolar
     */
    $sistemaSolar = array(
        "Sol" => 'Deshabitado',
        "Mercurio" => 'Deshabitado',
        "Venus" => 'Deshabitado',
        "Tierra" => 'Deshabitado',
        "Marte" => 'Deshabitado',
        "Júpiter" => 'Deshabitado',
        "Saturno" => 'Deshabitado',
        "Urano" => 'Deshabitado',
        "Neptuno" => 'Deshabitado',
        "Plutón" => 'Deshabitado'
    );
    /**
     * Paso2:Verificarelestadoinicialdelsistemasolar
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        pre{
            color: white;
        }
        .cuadro{
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }
        .espacio{
            padding: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
          <div class="form-group">
            <label for="valor">Ingresa cantidad de planeta (un número del 1 al 10):</label>
            <input type="number" id="valor" class="form-control" placeholder="Ingresa número entre 1 a 10" name="valor" min="1" max="10" required>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <div class="cuadro">
        <div class="espacio">
            <?php
                if(isset($sistemaSolar)){
                    echo "Inicializacion de los planetas:";
                    echo "<pre>";
                    var_dump($sistemaSolar);
                    echo "</pre>";
                }
            ?>
        </div>

        <div class="espacio">
            <?php
                if(isset($planetasSeleccionados)){
                    echo "Planetas habilitados:";
                    echo "<pre>";
                    var_dump($planetasSeleccionados);
                    echo "</pre>";
                }
            ?>
        </div>
    </div>


</body>
</html>