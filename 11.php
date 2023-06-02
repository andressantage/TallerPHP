<?php
/**
 * 11)
 * Supongamos que tienes dos arrays que representan los
 *planetas en dos sistemas solares diferentes. Quieres
 *encontrar losplanetasquesonúnicosencada sistema solar,
 *esdecir, aquellos queno estánpresentes enel otro sistema
 *solar.
 */
/**
 * Paso1:Crearlosarraysdeplanetas.
 * se tienes dos sistemas solares ficticios: $sistemaSolar1 y $sistemaSolar1
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
/**
 * Paso2:Encontrarlosplanetasúnicosencadasistemasolar
 * Se usa array_intersect para saber que planetas se comparten entre los dos sistemas solares luego se usa array_diff para imprimir los valores están en el primer arreglo pero no en los demás
 */
echo "Imprime un array de los planetas que estan repetidos: <br>";
$interseccion = array_intersect($sistemaSolar1, $sistemaSolar2);
echo "<pre>";
var_dump($interseccion);
echo "</pre>";

echo "Planetas unicos del sistema solar 1: <br>";
$diferencia1 = array_diff($sistemaSolar1, $interseccion);
echo "<pre>";
var_dump($diferencia1);
echo "</pre>";

echo "Planetas unicos del sistema solar 2: <br>";
$diferencia2 = array_diff($sistemaSolar2, $interseccion);
echo "<pre>";
var_dump($diferencia2);
echo "</pre>";

/**
 * 
 */

/**
 * 
 */
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