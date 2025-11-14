<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar usuario</title>
</head>
<body>
    <h2>Registro de usuario</h2>
    <form action="crearusuario.php" method="POST">
        Nombre: <input type="text" name="nombre" required><br>
        <br>
        Contraseña: <input type="password" name="clave" required><br>
        <br>
        <input type="submit" value="Crear">

        <br>
        <br>

        <a href="index.php">Iniciar Sesión</a>
    </form>
</body>
</html>
