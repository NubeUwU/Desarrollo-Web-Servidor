<?php

// Creamos la matriz
$alumnos = array(
    'Basico' => array('Ingles' => 1, 'Frances'=>14 ,'Aleman' => 8, 'Ruso' =>3),
    'Medio' => array('Ingles' => 6, 'Frances'=> 19,'Aleman' => 7, 'Ruso' =>2),
    'Avanzado' => array('Ingles' => 3, 'Frances'=>13,'Aleman' => 4, 'Ruso' =>1)
);

    foreach ($alumnos as $nivel => $niveles){
        foreach ($niveles as $idioma => $cantidad){
            echo "El número de alumnos matriculados en $idioma nivel $nivel son: $cantidad<br>";
            
        }
        echo "<br>";
    }

?>