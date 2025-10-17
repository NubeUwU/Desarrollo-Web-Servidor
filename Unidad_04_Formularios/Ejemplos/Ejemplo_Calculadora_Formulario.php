<?php

// Muestra el resultado
if (isset($_POST['num1']) && isset($_POST['num2'])){
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $operacion = $_POST['operacion'];
    $resultado = 0;
    

    switch ($operacion){
        case "suma":
            $resultado = $num1 + $num2;
            break;
        case "resta":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            break;
        case "division":
            $resultado = $num1 / $num2;
            break;
    }   

    echo "El resultado es: $resultado";
}

else echo <<<_END
<html>
    <head>
    <title>Form Test</title>
    </head>
<body>
    <form method="post" action="Ejemplo_Calculadora_Formulario.php">
        <label for="num1">Número 1:</label>
        <input id="num1" name="num1">
        <br><br>

        <label for="num2">Número 2:</label>
        <input id="num2" name="num2">
        <br><br>
        
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>

        <input type="submit" id="button" name="boton" value="Enviar">
    </form>
    </body>
</html>
_END;
?>