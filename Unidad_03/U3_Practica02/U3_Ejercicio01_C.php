<?php

// Creamos las variables e inicializamos el array
$confirmado = [true, true, false, true, false, false];
$localizador = 0;

// Iteramos sobre el array
for ($i = 0; $i < count($confirmado); $i++){
   
    // Si encuentra el localizador muestra su valor
    if ($i == $localizador){
        echo $confirmado [$i] ? "true" : "false";
    }
}

?>