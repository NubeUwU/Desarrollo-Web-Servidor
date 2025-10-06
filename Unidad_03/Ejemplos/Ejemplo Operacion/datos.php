<?php

$suma = ($_POST['num1'] + $_POST['num2']);
$resta = ($_POST['num1'] - $_POST['num2']);
$multiplicacion = ($_POST['num1'] * $_POST['num2']);
$division = ($_POST['num1'] / $_POST['num2']);

$operacion = $_POST['op'];

switch ($operacion){

    case '+':
        echo "La suma de $_POST['num1'] y $_POST['num2'] es: $suma";
        break;

    case "-":
        echo "La resta de " . $_POST['num1'] . " y " . $_POST['num2'] . " es: " . $resta;
        break;
    
    case "*":
        echo "La multiplicación de " . $_POST['num1'] . " y " . $_POST['num2'] . " es: " . $multiplicacion;
        break;

    case "/":
        echo "La división de " . $_POST['num1'] . " y " . $_POST['num2'] . " es: " . $division;
        break;
}

?>