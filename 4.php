<?php
/**
 * 4)
 * Supón que tienes un array que representa la gravedad de
 *varios planetas en nuestro sistema solar como una fracción
 *de la gravedad de la Tierra. Necesitas transformar estos
 *valores en la gravedad real, dado que la gravedad de la
 *Tierraesaproximadamente9.8m/s^2.
 */

/**
 * Paso1:Crearelarraydeplanetasconsugravedad
 */
$sistemaSolar = array(
    "Sol" => 27.9,
    "Mercurio" => 0.38,
    "Venus" => 0.91,
    "Tierra" => 1.0,
    "Marte" => 0.38,
    "Júpiter" => 2.53,
    "Saturno" => 1.07,
    "Urano" => 0.89,
    "Neptuno" => 1.14,
    "Plutón" => 0.06
);
echo "Array de planetas con la gravedad relativa con respecto a la de la Tierra:<br>";
echo "<pre>";
var_dump($sistemaSolar); 
echo "</pre>";
/**
 * Paso2:Defineunafunciónparacalcularlagravedadrea
 */
function gravedad($array) {
    $array_con_gravedad_real=[];
    foreach($array as $clave => $valor){ 
        array_push($array_con_gravedad_real,[$clave=>$valor*9.8]);
    }
    return $array_con_gravedad_real;
}
echo "Array con gravedad aproximada de cada planeta:<br>";
echo "<pre>";
var_dump(gravedad($sistemaSolar)); 
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