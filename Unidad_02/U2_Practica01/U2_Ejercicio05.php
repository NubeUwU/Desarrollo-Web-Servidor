<?php

// Creamos las variables
$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);
$solucionPos = 0;
$solucionNeg = 0;

// Calculamos el discriminante de la ecuacion
$discriminante = ($b**2) - (4*$a*$c);


// En funcion del valor del discriminante mostramos los resultados de la ecuación:

// Sin Solucion
if ($discriminante < 0){    
echo "Datos: <br> A = " .$a . "<br>B = ".$b."<br>C = ". $c . "<br><br>Solución: No existe solución";


// Una Solucion
}else if($discriminante == 0){ 
    $solucionPos = ((-$b)/ (2*$a));
    echo "Datos: <br> A = " .$a . "<br>B = ".$b."<br>C = ". $c . "<br><br>Solución: " . round($solucionPos,4);


// Dos soluciones
}else{ 
    $solucionPos = (((-$b) + sqrt(($b**2) - (4*$a*$c)))/(2*$a));
    $solucionNeg = (((-$b) - sqrt(($b**2) - (4*$a*$c)))/(2*$a));

    echo "Datos: <br> A = " .$a . "<br>B = ".$b."<br>C = ". $c . "<br><br>Solución 1: " . round($solucionPos,4) . "<br>Solucion2: " . round($solucionNeg,4);
}
?>