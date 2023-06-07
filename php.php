<?php
    /**
     * 1)
     * magina que tienesun array que representa los planetas en
     *nuestro sistema solar. Las claves son los nombres de los
     *planetas y los valores son sus respectivos números de
     *orden,empezandodesdeel sol.
     */
    /**
     * Paso 1: Crear el array deplanetas
     * se crea el array $intercambioSolar el cual se intercambian las llaves por las claves
     */
    $sistemaSolar = array(
        "Sol" => 1,
        "Mercurio" => 2,
        "Venus" => 3,
        "Tierra" => 4,
        "Marte" => 5,
        "Júpiter" => 6,
        "Saturno" => 7,
        "Urano" => 8,
        "Neptuno" => 9,
        "Plutón" => 10
    );
    $intercambioSolar=array_flip($sistemaSolar);
    /**
     * Busco el valor de la clave 3
     */
    echo "<pre>";
    var_dump($intercambioSolar[3]);
    echo "</pre>";
    /**
     * Paso 2: Buscar el nombre de un planeta por su número de orden Ejemplo‘Marte’
     */
    echo "<pre>";
    var_dump($intercambioSolar["5"]);
    echo "</pre>";

    /**
     * 2)
     * Supongamos que estás creando un juego de simulación
     *espacial y necesitas crear un sistema solar básico. Decides
     *que cada sistema solar en tu juego debe tener un cierto
     *númerodeplanetascuandosecrea.
     */
    $
    /**
     * Paso 1: Decidir cuántos planetas tendrá el sistemasolar
     */
    $sistemaSolar = array(
        "Sol" => 1,
        "Mercurio" => 2,
        "Venus" => 3,
        "Tierra" => 4,
        "Marte" => 5,
        "Júpiter" => 6,
        "Saturno" => 7,
        "Urano" => 8,
        "Neptuno" => 9,
        "Plutón" => 10
    );
    $intercambioSolar=array_flip($sistemaSolar);
    /**
     * Busco el valor de la clave 3
     */
    echo "<pre>";
    var_dump($intercambioSolar[3]);
    echo "</pre>";
    /**
     * Paso 2: Buscar el nombre de un planeta por su número de orden Ejemplo‘Marte’
     */
    echo "<pre>";
    var_dump($intercambioSolar["5"]);
    echo "</pre>";

?>