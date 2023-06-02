<?php
/**
 * 9)
 * Supón que tienes un array que representa las diferentes
 *especies alienígenas que tu equipo de exploración ha
 *encontrado. Sin embargo, la lista podría contener especies
 *duplicadas y necesitas eliminar las duplicaciones para
 *obtenerunalistaúnicadeespeciesalienígenas.
 */

/**
 * Paso1:Crearelarraydeespeciesalienígenas.
 * se usa array_unique para obtener un array con los valores no repetidos de especies sino unicos
 */
$especiesAlienigenas = array(
    "Zorgon",
    "Xanthor",
    "Lumarian",
    "Quilgor",
    "Vortian",
    "Xanthor",
    "Draknor",
    "Zyloph",
    "Nebulite",
    "Draknor",
    "Kryllian",
    "Epsilonian"
  );
echo "Imprime el array de especies alienígenas:. <br>";
echo "<pre>";
var_dump($especiesAlienigenas); 
echo "</pre>";  

$arregloUnico = array_unique($especiesAlienigenas);
echo "Imprime el array con los valores unicos de la especies: <br>";
echo "<pre>";
var_dump($arregloUnico); 
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