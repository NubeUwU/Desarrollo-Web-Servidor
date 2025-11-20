<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1> PHP Form Validation Example</h1>
    <form method="post" action="validaciones.php">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <span style="color:red;"><?php echo $nameErr; ?></span>
        <br><br>

        <label for="email">E-mail:</label>
        <input type="text" name="email">
        <span style="color:red;"><?php echo $emailErr; ?></span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password">
        <span style="color:red;"><?php echo $passErr; ?></span>
        <br><br>

        <label for="website">Website:</label>
        <input type="text" name="url">
        <span style="color:red;"><?php echo $urlErr; ?></span>
        <br><br>

        <label for="comment">Comment:</label>
        <textarea name="comment"></textarea>
        <br><br>
        
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male" id="gender_male">
        <label for="gender_male">Male</label>

        <input type="radio" name="gender" value="female" id="gender_female">
        <label for="gender_female">Female</label>
        
        <span style="color:red;"><?php echo $genderErr; ?></span>
        <br><br>
        
        
        <input type="submit" value="Enviar">

        <br><br>


    </form>

</body>
</html>