<?php

// Creamos e inicializamos las variables
$jugadores = array("Crovic", "Antic", "Malic", "Zulic", "Rostrich");
$alineacion = "";

// Mostramos el resultado
echo "La alineación del equipo está compuesta por ";

$alineacion = implode (", ", $jugadores); // Unimos los valores en un string

echo $alineacion;

?>