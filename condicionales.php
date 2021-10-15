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
  
    <form class="form" action="" method="POST" name="data" id="data">
        <h2>Ingresa un nivel para ver el aula asignada</h2>
        
        <label for="num">Nivel</label>
        <input type="text" name="num" id="num">
        <br>
        <br>

        <button type="submit" name="submit" id="submit">Ver aula asignada</button>
        <br>
        <br>

    </form>

<?php
    

    if(isset ($_POST["submit"])) {
        
        $nivel= $_POST["num"];

        if($nivel>=0 && $nivel<=5) {
            echo "<p class='allowed'>El nivel $nivel Se dicta en el Aula Virtual n° 1</p>";
        } elseif ($nivel>5 && $nivel<=10) {
            echo "<p class='allowed'>El nivel $nivel Se dicta en el Aula Virtual n° 2</p>";
        } elseif ($nivel>10 && $nivel<=15) {
            echo "<p class='allowed'>El nivel $nivel Se dicta en el Aula Virtual n° 3</p>";
        } else {
            echo "<p class='denied'>El nivel ingresado es incorrecto, vuelve a ingresar un nivel.</p>";
        }
    }
    

?>

</body>
</html>
