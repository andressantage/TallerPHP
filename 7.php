<?php
/**
 * 7)
 * Supón que tienes un array que representa los tipos de
 *naves espaciales en tu flota. Quieres ser capaz de verificar
 *si un tipo específico de nave espacial está presente en tu
 *flota.
 */

/**
 * Paso1:Crearelarraydenavesespaciales
 */
$navesEspaciales = array(
    "Apollo 11",
    "Discovery",
    "Challenger",
    "Columbia",
    "Soyuz",
    "Hubble",
    "Voyager",
    "Curiosity",
    "ISS (Estación Espacial Internacional)",
    "SpaceX Dragon"
  );
echo "Imprime las naves especiales:";
echo "<pre>";
var_dump($navesEspaciales); 
echo "</pre>";
/**
 * 
 */
echo "Se revisara si existe la nave SpaceX Dragon:<br>";
$existeValor = in_array("SpaceX Dragon", $navesEspaciales); 
/* echo "<pre>";
var_dump($existeValor); 
echo "</pre>"; */
echo $existeValor ? "El valor existe"."<br>" : "El valor no existe"."<br>";
echo "<br>";

echo "Se revisara si existe la nave Picka:<br>";
$existeValor = in_array("Picka", $navesEspaciales); 
/* echo "<pre>";
var_dump($existeValor); 
echo "</pre>"; */
echo $existeValor ? "El valor existe"."<br>" : "El valor no existe"."<br>";
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