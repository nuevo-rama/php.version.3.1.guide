<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  
    <form class="form" action="" method="POST" name="user_data" id="user_data">
        <h2>Validación de Usuario</h2>
        <label for="user_name">Usuario</label>
        <input type="text" name="user_name" id="user_name">
        <br>
        <br>
        <label for="user_number">Número de usuario</label>
        <input type="number" name="user_number" id="user_number">
        <br>
        <br>

        <button type="submit" name="submit" id="submit">LOGIN</button>

    </form>

<?php

    if(isset ($_POST["submit"])) {
        
        $user_name = $_POST["user_name"];
        $user_number = $_POST["user_number"];

        switch (true) :

            case $user_name=="admin" && $user_number=="1234":
                echo "<p class='allowed'>Usuario $user_name permitido</p>";
                break;
            case $user_name=="test" && $user_number=="1234":
                echo "<p class='allowed'>Usuario $user_name permitido</p>";
                break;
            default:
                echo "<p class='denied'>Usuario $user_name denegado</p>";

        endswitch;

    }

?>

</body>
</html>
