<?php

// Declaramos el array con las familias
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

foreach ($gente as $familia => $descripcion0){
    echo "<li>$familia";
    echo "<ul>"; // Lista de miembros de la familia

    foreach ($descripcion0 as $padres => $descripcion1){
        if(is_array($descripcion1)){
            echo "<li>$padres:";
            echo "<ul>"; // Lista de hijos
            foreach($descripcion1 as $hijo){
                echo "<li>$hijo</li>";
            }
            echo "</ul>";
            echo "</li>";
        } else {
            echo "<li>$padres: $descripcion1</li>";
        }
    }

    echo "</ul>";
    echo "</li>";
    echo "<br>";
}


?>
