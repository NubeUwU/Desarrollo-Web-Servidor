<?php

//<----- FUNCTIONS ----->

function validarNombre(){
    $name = $_POST["name"];

    if (empty($name)) {
        $nameErr = "El nombre es obligatorio";

    } else {
        $name = test_input($_POST["name"]);
        
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Únicamente se permiten letras y espacios";
        
        }
    }

    return ($nameErr);
}



function validarEmail(){
    $email = $_POST["email"];
    
    if (empty($email)){
        $emailErr = "Email Requerido";
    
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Formato de email no valido";
        }
    }

    return $passErr;
    
}




function validarPassword(){
    $password = $_POST["password"];
    
    if($password == ""){
        $passErr = "Contraseña Requerida";
   
    }else{
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
            $passErr = "Debe contener una Mayuscula, una minuscula, un número y un caracter especial.";
        }
    }
    
    return $passErr;
      
}

function encriptarPassword($password){
    $encriptedPass = hash
    
}

/*
function guardarDatos(){
    $connection = new mysqli($hn, $un, $pw, $db);
    if ($connection->connect_error) {
        die("Conexión fallida: " . $connection->connect_error);
    }

}
*/



//<----- MAIN ----->

// Inicializamos las variables
$nameErr = $emailErr = $passErr = $urlErr = $genderErr = "";
$name = $email = $password = $website = $gender = "";


$name = $_POST["name"];
validarNombre($name);

$email = $_POST["email"];
validarEmail($email);

$password = $_POST["password"];
validarPassword($password);

if($name = $email = $password = $website = $gender = ""){
    guardarDatos($name,$email,$password,$website,$gender);
}


?>