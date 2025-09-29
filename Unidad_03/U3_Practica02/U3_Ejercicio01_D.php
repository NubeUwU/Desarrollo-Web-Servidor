<?php

// Creamos e inicializamos el array jugadores
$jugadores = array("Crovic", "Antic", "Malic", "Zulic", "Rostrich");

// Mostramos el resultado
echo "La alineación del equipo está compuesta por ";

// Iteramos sobre el array para mostrar todos sus valores
for ($i=0; $i < count($jugadores); $i++){
    
    // Cuando llega al maximo muestra un punto
    if($i == count($jugadores)-1){
          echo $jugadores[$i] . ".";
        
    // Muestra la posicion y una ","
    }else{
          echo $jugadores[$i] . ", ";
    }
}

?>