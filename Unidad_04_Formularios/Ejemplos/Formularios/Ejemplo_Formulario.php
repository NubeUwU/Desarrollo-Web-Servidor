<?php // formtest2.php
 if (isset($_POST['name'])) echo $_POST['name'];
 else
 echo <<<_END
 <html>
 <head>
 <title>Form Test</title>
 </head>
 <body>
 <form method="post" action="Ejemplo_Formulario.php">
 What is your name?
 <input type="text" name="name">
 <input type="submit">
 </form>
 </body>
 </html>
_END;
?>