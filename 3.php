<?php
/**
 * 3)
 * Supongamos que tienes un array asociativo que representa
 *varios planetas en nuestro universo. Las claves son los
 *nombres de los planetas y los valores son booleanos que
 *representansiunplanetaeshabitable(true)ono(false).
 */

/**
 * Paso1:Crearelarraydeplanetas.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nivel']=$_POST['nivel'];
    header("Location: palabras.php");
    exit();
}

/*     session_start();
$Deshabitado=$_POST["planetas"];
$_SESSION[] = $Deshabitado; */
    /**
 * 1)
 * magina que tienesun array que representa los planetas en
 *nuestro sistema solar. Las claves son los nombres de los
 *planetas y los valores son sus respectivos números de
 *orden,empezandodesdeel sol.
 */
/**
 * Paso 1: Crear el array deplanetas
 * se crea el array para obtener los planetas que son habitables
 */
$sistemaSolar = array(
    "Sol" => false,
    "Mercurio" => false,
    "Venus" => false,
    "Tierra" => true,
    "Marte" => false,
    "Júpiter" => false,
    "Saturno" => false,
    "Urano" => false,
    "Neptuno" => false,
    "Plutón" => false
);
echo "Se imprime el array de planetas: <br>";
echo "<pre>";
var_dump($sistemaSolar);
echo "</pre>";
/**
 * Paso 2: Verificarel resultadodelosplanetasfiltrados.
 * se usa array_filter para filtrar los elemento que solo son true
 */
$filteredArray = array_filter($sistemaSolar, function($elemento) { 
    return $elemento === true;
});
echo "Se verifica imprimiendo al array con los planetas que son habitables: <br>";
echo "<pre>";
var_dump($filteredArray);
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