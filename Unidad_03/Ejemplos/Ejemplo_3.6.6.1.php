<?PHP

// Declaramos el array
$personas = array(
            $persona1 = array(  //Importante declarar el array con "$".
                        'nombre' => "Yolanda",
                        'apellido1' => "Iglesias",
                        'apellido2' => "Suarez"),
                        
            $persona2 = array(
                        'nombre' => "Juan",
                        'apellido1' => "Lopez",
                        'apellido2' => "Blanco")
                        
                );
    
// Recorremos el array y mostramos su contenido
foreach($personas as $indice){
    foreach($indice as $nombres => $contenido){
        echo ("$nombres: $contenido<br>");
    }
    echo "<br>";
}


?>