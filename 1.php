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
    echo "Array de planetas y sol en orden:<br>";
    echo "<pre>";
    var_dump($sistemaSolar); 
    echo "</pre>";

    $intercambioSolar=array_flip($sistemaSolar);
    /**
     * Busco el valor de la clave 3
     */
    echo "Se buscara el nombre del planeta con el orden numero 3:<br>";
    echo "<pre>";
    var_dump($intercambioSolar[3]);
    echo "</pre>";
    /**
     * Paso 2: Buscar el nombre de un planeta por su número de orden Ejemplo‘Marte’
     */
    echo "Se buscara el orden del planeta Marte:<br>";
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
    <title>Taller PHP</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>