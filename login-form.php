<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  
    <form class="form" action="" method="POST" name="user_data" id="user_data">
        <h2>Login Validation</h2>
        <label for="user_name">Name</label>
        <input type="text" name="user_name" id="user_name">
        <br>
        <br>
        <label for="user_age">Age</label>
        <input type="number" name="user_age" id="user_age">
        <br>
        <br>

        <button type="submit" name="submit" id="submit">LOGIN</button>

    </form>

<?php

    if(isset ($_POST["submit"])) {
        $user_name= $_POST["user_name"];
        $user_age= $_POST["user_age"];
    

        if($user_name== "José" && $user_age>=18) {
            echo "<p class='allowed'>Access allowed</p>";
        } else {
            echo "<p class='denied'>Access denied</p>";
        }

    }

?>

</body>
</html>
