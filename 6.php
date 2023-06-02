<?php
/**
 * 6)
 * Supón que tienes un array que representa los planetas de
 *nuestro sistema solar. Quieres ser capaz de verificar si un
 *planetaespecíficoexisteenestesistema.
 */

/**
 * Paso1:Crearelarraydeplanetas.
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
 * se revisa la existencia de del planeta Marte
 */
echo "Se revisara si existe el planeta Marte:<br>";
$existeValor = in_array("Marte", $sistemaSolar); 
/* echo "<pre>";
var_dump($existeValor); 
echo "</pre>"; */
echo $existeValor ? "El valor existe"."<br>" : "El valor no existe"."<br>";
echo "<br>";
/**
 * se revisa la existencia de del planeta Molar
 */
echo "Se revisara si existe el planeta Molar:<br>";
$existeValor = in_array("Molar", $sistemaSolar); 
/* echo "<pre>";
var_dump($existeValor); 
echo "</pre>"; */
echo $existeValor ? "El valor existe"."<br>" : "El valor no existe"."<br>";
echo "<br>";
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