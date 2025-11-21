<?php
include("conexion.php");


//<----- FUNCTIONS ----->


// Funcion que valida el nombre
function validarNombre($name, $nameErr){

    if (empty($name)) {
        $nameErr = " * Name is required";

    } else {
        
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = " * Only letters and white spaces allowed";
        
        }
    }

    return ($nameErr);
}


// Funcion que valida el email
function validarEmail($email, $emailErr){
    
    if (empty($email)){
        $emailErr = " * Email Required";
    
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = " * Invalid email format";
        }
    }

    return $emailErr;
    
}



// Funcion que valida la contraseña
function validarPassword($password, $passErr){
    
    if($password == ""){
        $passErr = " * Password is Required";
   
    }else{
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
            $passErr = " * The password must contain a Mayus, a minus, a number and a special char.";
        }
    }
    
    return $passErr;
      
}

// Funcion que valida el genero
function validarGender($gender, $genderErr){
    if (empty ($gender)){
        $genderErr = " * Gender is required";
    }
    return $genderErr;
}



// Funcion que encripta la contraseña
function encriptarPassword($password){
    return password_hash($password, PASSWORD_DEFAULT);
}


// Funcion que guarda los datos en la DB
function guardarDatos($name, $email, $password, $website, $gender) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO usuarios (name, email, password, website, gender) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $password, $website, $gender);

    if($stmt->execute()){
        echo "<p style='color: green;'>Datos guardados correctamente.</p>";
    } else {
        echo "<p style='color: red;'>Error al guardar: " . $stmt->error . "</p>";
    }

    $stmt->close();
}



//<----- MAIN ----->

// Inicializamos las variables
$nameErr = $emailErr = $passErr = $urlErr = $genderErr = "";
$name = $email = $password = $website = $gender = "";

// Asignamos la información
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$website = $_POST["website"] ?? "";
$gender = $_POST["gender"] ?? "";


// Validamos la informacion
$nameErr = validarNombre($name, $nameErr);
$emailErr = validarEmail($email, $emailErr);
$passErr = validarPassword($password, $passErr);
$genderErr = validarGender($gender, $genderErr);

// Si no hay errores, guardamos la informacion
if ($nameErr === "" && $emailErr === "" && $passErr === "") {
    
    // Encriptamos la contraseña para guardarla
    $password = encriptarPassword($password);
    
    guardarDatos($name, $email, $password, $website, $gender);
}



?>