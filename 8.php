<?php
/**
 * 8)
 * Supón que tienes un array que representa los planetas de
 *nuestro sistema solar. Quieres ser capaz de seleccionar
 *aleatoriamente un planeta para enviar una misión de
 *exploración.
 */

/**
 * Paso1:Crearelarraydeplanetas
 */
$sistemaSolar = array(
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
 * Paso2:Generauníndicealeatorio
 */

$indiceAleatorio=rand(0, count($sistemaSolar));
echo "Valor indice aleatorio:<br>";
echo "<pre>";
var_dump($indiceAleatorio); 
echo "</pre>";
/**
 * Paso3:Usaelíndicealeatorioparaseleccionarunplaneta
 */
echo "Planeta seleccionado:<br>";
echo "<pre>";
var_dump($sistemaSolar[$indiceAleatorio]); 
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