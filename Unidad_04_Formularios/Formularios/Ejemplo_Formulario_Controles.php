    <?php

    // ----- RECARGA -----

    if(isset($_POST['boton'])){

        // Asignamos los valores del navegador
        $navegadores = isset($_POST['navegador']) ? $_POST['navegador'] : [];

        // Mostramos los valores introducidos
        echo "Nombre: " . ucfirst($_POST['nombre']) . "<br>";
        echo "Apellidos: " . ucfirst($_POST['apellidos']) . "<br>";
        echo "Edad: " . $_POST['edad'] . "<br>";
        echo "Profesión: " . ucfirst($_POST['profesion']) . "<br>";
        echo "Sexo: " . ucfirst($_POST['sexo']) . "<br>";
        if (!empty($navegadores)) echo "Navegador(es): " . implode(", ", $navegadores) . "<br>";
        


    // ----- CARGA -----
    }else echo <<<_END

    <html>
        <head>
        <title>Form Test</title>
        </head>
    <body>
        <form method="post" action="Ejemplo_Formulario_Controles.php">
            <label for="nombre">Nombre: </label>
            <input name="nombre">
            <br><br>

            <label for="Apellidos">Apellidos: </label>
            <input name="apellidos">
            <br><br>

            <label for="edad">Edad: </label>
            <input type="number" name="edad" min="0" max="110">

            <br><br>
            
            <label for="profesion">Profesion: </label>
                <select name="profesion">
                    <option value="profesor">Profesor</option>
                    <option value="constructor">Constructor</option>
                    <option value="carpintero">Carpintero</option>
                    <option value="chofer">Chofer</option>
                </select>

            <br><br>

            <label for="sexo">Sexo: </label>
                <input type="radio" name="sexo" value="hombre">Hombre
                <input type="radio" name="sexo" value="mujer">Mujer
            
            <br><br>

            <label for="navegador">Navegador usado:</label>
                <input type="checkbox" name="navegador[]" value="Chrome"> Chrome
                <input type="checkbox" name="navegador[]" value="Edge"> Edge
                <input type="checkbox" name="navegador[]" value="Opera"> Opera
                <input type="checkbox" name="navegador[]" value="Safari"> Safari
                <br><br>

            <input type="submit" id="button" name="boton" value="Enviar">
        </form>

    </body>
    </html>

    _END;


    ?>