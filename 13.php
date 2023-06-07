<?php
/**
 * 13)
 * 13.Supongamos que tienes un array que representa los
 *planetas en nuestro sistema solar. Quieres poder revertir el
 *ordendelosplanetasenesearray.
 */


/**
 * Paso1:Crearelarraydeplanetas
 */
$sistemaSolar = array(
    "Sol",
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
echo "Array de planetas:<br>";
echo "<pre>";
var_dump($sistemaSolar); 
echo "</pre>";
/**
 * $reversedArray guarda el inverso del array
 */
$reversedArray = array_reverse($sistemaSolar); 
echo "Array de planetas invertido:<br>";
echo "<pre>";
var_dump($reversedArray); 
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