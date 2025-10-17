<?php

// Si $elementos no existe hace la asignacion
if (isset($_POST["elementos"])) $elementos = $_POST["elementos"];

// Comprobamos si se han enviado los datos
if (isset($_POST['num1'])) {
    $nElementos = count($_POST);
   
    // Mostramos todos los números introducidos
    for ($i = 1; $i < $nElementos; $i++) {
        $numero = $_POST["num{$i}"];
        echo "El número $i es: $numero<br>";
    }
    
} else { echo <<<_END
<html>
<head>
    <title>Form Test</title>
</head>
<body>

    <!-- Formulario -->
    <form method="post" action="Ejemplo_Bucle_Formulario.php">
_END;
    
    // Mostramos la cantidad de inputs con un bucle
    for ($i = 1; $i <= $elementos; $i++){
        echo "<label for='num{$i}'>Número $i:</label>";
        echo "<input id='n{$i}' name='num{$i}'><br><br>";
    }

    echo <<<_END
    <input type="submit" id="button" name="boton" value="Enviar">
    </form>
</body>
</html>
_END;
}
?>
