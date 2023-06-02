<?php
    /**
     * 1)
     * magina que tienesun array que representa los planetas en
     *nuestro sistema solar. Las claves son los nombres de los
     *planetas y los valores son sus respectivos números de
     *orden,empezandodesdeel sol.
     */
    /**
     * Paso 1: Crear el array deplanetas
     * se crea el array $intercambioSolar el cual se intercambian las llaves por las claves
     */
    $sistemaSolar = array(
        "Sol" => 1,
        "Mercurio" => 2,
        "Venus" => 3,
        "Tierra" => 4,
        "Marte" => 5,
        "Júpiter" => 6,
        "Saturno" => 7,
        "Urano" => 8,
        "Neptuno" => 9,
        "Plutón" => 10
    );
    $intercambioSolar=array_flip($sistemaSolar);
    /**
     * Busco el valor de la clave 3
     */
    echo "<pre>";
    var_dump($intercambioSolar[3]);
    echo "</pre>";
    /**
     * Paso 2: Buscar el nombre de un planeta por su número de orden Ejemplo‘Marte’
     */
    echo "<pre>";
    var_dump($intercambioSolar["5"]);
    echo "</pre>";

    /**
     * 2)
     * Supongamos que estás creando un juego de simulación
     *espacial y necesitas crear un sistema solar básico. Decides
     *que cada sistema solar en tu juego debe tener un cierto
     *númerodeplanetascuandosecrea.
     */
    $
    /**
     * Paso 1: Decidir cuántos planetas tendrá el sistemasolar
     */
    $sistemaSolar = array(
        "Sol" => 1,
        "Mercurio" => 2,
        "Venus" => 3,
        "Tierra" => 4,
        "Marte" => 5,
        "Júpiter" => 6,
        "Saturno" => 7,
        "Urano" => 8,
        "Neptuno" => 9,
        "Plutón" => 10
    );
    $intercambioSolar=array_flip($sistemaSolar);
    /**
     * Busco el valor de la clave 3
     */
    echo "<pre>";
    var_dump($intercambioSolar[3]);
    echo "</pre>";
    /**
     * Paso 2: Buscar el nombre de un planeta por su número de orden Ejemplo‘Marte’
     */
    echo "<pre>";
    var_dump($intercambioSolar["5"]);
    echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://www.semana.com/resizer/FoMQoVccuVtUBm3VjyI1Rsnx8uM=/1280x720/smart/filters:format(jpg):quality(80)/cloudfront-us-east-1.images.arcpublishing.com/semana/ZYCBBET2KFGI3GQERGAFAJJOIY.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            font-weight: bold;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>

<form action="2.php">
<div class="container d-flex justify-content-center align-items-center">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header text-dark"><h5 class="card-title"></h5></div>
        <div class="card-body text-primary">
            <!-- <p class="card-text"> -->
                <div class="form-group">
                    <label for="planetas">Cantidad del planetas para el sistema solar:</label>
                    <input type="text" class="form-control" name="planetas" placeholder="Ingresa planetas">
                </div>
                <!-- <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingresa tu correo">
                </div> -->
               <!--  <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="contra" placeholder="Ingresa tu contraseña">
                </div> -->
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>
            <!-- </p> -->
        </div>
    </div>
</div>
</form>
 
</body>
</html>