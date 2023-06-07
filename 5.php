<?php
/**
 * 5)
 * Supónquetienesunarrayquerepresentalamasadevarias
 *naves espaciales en tu flota y necesitas calcular la masa
 *totaldetodas lasnavesespaciales.
 */

/**
 * Paso1:Crearelarraydenavesespaciales
 */
$navesEspaciales = array(
    "Apollo 11"=>7,
    "Discovery"=>7.2,
    "Challenger"=>7.8,
    "Columbia"=>8.3,
    "Soyuz"=>8.3,
    "Hubble"=>9.4,
    "Voyager"=>4.5,
    "Curiosity"=>8.2,
    "ISS (Estación Espacial Internacional)"=>1.2,
    "SpaceX Dragon"=>12.5
  );
echo "Imprime las naves especiales:";
echo "<pre>";
var_dump($navesEspaciales); 
echo "</pre>";
/**
 * Paso2:Defineunafunciónparacalcularlamasatotal
 * se usa un foreach para ir por cada valor y asi sumarlo
 */
$masaTotal=0;
foreach($navesEspaciales as $clave => $valor){ 
    $masaTotal=$masaTotal+$valor;
}
echo "Masa total de todas las naves:";
echo "<pre>";
var_dump($masaTotal); 
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