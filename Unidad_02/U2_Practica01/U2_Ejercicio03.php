<?php
    $horas = 50;
    $horasExtra = $horas - 40;
    $precioHorNormal = 1;
    $pagoHorExtra = 0;

    if($horas < 40 && $horas <= 48){
        $pagoHorExtra = $horasExtra * 2 * $precioHorNormal;
        echo "Se han realizado " . $horasExtra . " horas extra, y se ha pagado un total de " . $pagoHorExtra . "€ por ellas.";
   
    }else if ($horas > 48){
        $pagoHorExtra = (8 * 2 * $precioHorNormal) + (($horasExtra-8) * 3 * $precioHorNormal);
        echo "Se han realizado " . $horasExtra . " horas extra, y se ha pagado un total de " . $pagoHorExtra. " € por ellas.";
    
    }else{
        echo "No se han realizado horas extra, no se pagara nada por ellas.";
    }

    

?>