<?php 
include("validaciones.php"); 

// Inicializamos las variables
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$website = $_POST["url"] ?? "";
$comment = $_POST["comment"] ?? "";
$gender = $_POST["gender"] ?? "";

$nameErr = $emailErr = $passErr = $urlErr = $genderErr = "";

// Validamos solo si se envió el formulario
if (isset($_POST["enviar"])) {
    $nameErr = validarNombre($name, '');
    $emailErr = validarEmail($email, '');
    $passErr = validarPassword($password, '');
    $genderErr = validarGender($gender, '');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<h1>PHP Form Validation Example</h1>

<form method="post" action="formulario.php">

    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
    <?php if(isset($_POST["enviar"]) && $nameErr !== ""): ?>
        <span style="color:red;"><?php echo $nameErr; ?></span>
    <?php endif; ?>
    <br><br>

    <label for="email">E-mail:</label>
    <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <?php if(isset($_POST["enviar"]) && $emailErr !== ""): ?>
        <span style="color:red;"><?php echo $emailErr; ?></span>
    <?php endif; ?>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" name="password">
    <?php if(isset($_POST["enviar"]) && $passErr !== ""): ?>
        <span style="color:red;"><?php echo $passErr; ?></span>
    <?php endif; ?>
    <br><br>

    <label for="website">Website:</label>
    <input type="text" name="url" value="<?php echo htmlspecialchars($website); ?>">
    <br><br>

    <label for="comment">Comment:</label>
    <textarea name="comment"><?php echo htmlspecialchars($comment); ?></textarea>
    <br><br>

    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="male" <?php if ($gender=="male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="female" <?php if ($gender=="female") echo "checked"; ?>> Female
    <?php if(isset($_POST["enviar"]) && $genderErr !== ""): ?> <span style="color:red;"><?php echo $genderErr; ?></span>
    <?php endif; ?>
    <br><br>

    <input type="submit" name="enviar" value="Enviar">
    <br><br>

</form>


<?php 

// <----- Mostramos los inputs enviados ----->

if (isset($_POST["enviar"])) {
    echo "<h2>Your Input:</h2>";

    foreach ($_POST as $clave => $valor) {
        if ($clave == "enviar") continue; // Se evita mostrar el boton enviar
        if (trim($valor) === "") continue; // Se evita mostrar los valores vacios

        echo "<p><b>" . ucfirst(htmlspecialchars($clave)) . ":</b> " . htmlspecialchars($valor) . "</p>";
    }
}
?>

</body>
</html>
