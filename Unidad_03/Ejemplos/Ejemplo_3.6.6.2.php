<?php

$gente = array(
    'Los Simpson' => array(
        'Padre' => 'Homer',
        'Madre' => 'Marge',
        'Hijos' => array('Bart', 'Lisa', 'Maggie')
    ),
    'Los Griffin' => array(
        'Padre' => 'Peter',
        'Madre' => 'Lois',
        'Hijos' => array('Chris', 'Meg', 'Stewie')
    )
);

// Iteramos sobre la familia
foreach ($gente as $familia => $descripcion0) {
    echo "$familia <br>";

    // Iteramos sobre los integrantes
    foreach ($descripcion0 as $padres => $descripcion1) {
        
        // Si es un array, muestra su contenido
        if (is_array($descripcion1)) {
            echo "$padres: ";
            
            // Mostramos el contenido de los hijos
            foreach ($descripcion1 as $hijo) {
                echo "$hijo ";
            }
            echo "<br>";

        // Mostramos los padres
        } else {
            echo "$padres: $descripcion1<br>";
        }
    }

    echo "<br>";
}

?>
