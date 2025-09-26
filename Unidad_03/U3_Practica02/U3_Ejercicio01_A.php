<?PHP

// Funcion para buscar contenido en un array
function buscarContenido($coches, $localizador){
   
    // Iteramos sobre el array
    for ($i = 0; $i < count($coches); $i++){

        // Si el identificador del array coincide con el localizador, muestra el contenido
        if($i == $localizador){
         echo "El elemento con el localizador ' " .$localizador . " ' es: " . $coches[$i];
   
        }
    }
}


// Creamos el array con contenido y el localizador de lo que queremos buscar
$coches = array(32,11,45,22,78,-3,9,66,5);
$localizador = 5;

// Llamamos a la funcion que nos permite buscar un contenido del array
buscarContenido($coches, $localizador);

?>