<?php
/**
 * 10)
 * Supongamos que tienes dos arrays que representan los
 *planetas en dos sistemas solares diferentes. Quieres
 *encontrar losplanetasquesoncomunesenambos sistemas
 *solares.
 */

/**
 * Paso1:Crearlosarraysdeplanetas
 * se tienen dos sistemas solares ficticios: $sistemaSolar1 y $sistemaSolar1
 * se usa array_intersect para encontrar los planetas comunes
 */
$sistemaSolar1 = array(
    "Mercurio",
    "Maria",
    "Tierra",
    "Marte",
    "Kepler",
    "Saturno",
    "Urano",
    "Andeworthy",
    "Plutón"
);
echo "Sistema solar 1: <br>";
echo "<pre>";
var_dump($sistemaSolar1); 
echo "</pre>";
$sistemaSolar2 = array(
    "Mercurio",
    "Venus",
    "Tierra",
    "Marte",
    "Júpiter",
    "Saturno",
    "Urano",
    "Neptuno",
    "Plutón"
);
echo "Sistema solar 2: <br>";
echo "<pre>";
var_dump($sistemaSolar2); 
echo "</pre>";

echo "Imprime un array de los planetas comunes en los dos sistemas solares: <br>";
$interseccion = array_intersect($sistemaSolar1, $sistemaSolar2);
echo "<pre>";
var_dump($interseccion);
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