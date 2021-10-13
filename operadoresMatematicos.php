<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="loginStyles.css">
</head>
<body>
  
    <form class="form" action="" method="POST">
        <h2>Operaciones Matemáticas</h2>
        <label for="num1">Primer Número</label>
        <input type="text" name="num1" id="num1">
        <br>
        <br>
        <label for="num2">Segundo Número</label>
        <input type="text" name="num2" id="num2">
        <br>
        <br>
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>División</option>
            <option>Módulo</option>
        </select>

        <input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
        <br>
        <br>

    </form>

<?php

    if(isset ($_POST["button"])) {
        $primerNumero= $_POST["num1"];
        $segundoNumero= $_POST["num2"];
        $operacion= $_POST["operacion"];

        if(!strcmp("Suma", $operacion)) {
            echo ($primerNumero + $segundoNumero);
        }
        if(!strcmp("Resta", $operacion)) {
            echo ($primerNumero - $segundoNumero);
        }
        if(!strcmp("Multiplicación", $operacion)) {
            echo ($primerNumero * $segundoNumero);
        }
        if(!strcmp("División", $operacion)) {
            echo ($primerNumero / $segundoNumero);
        }
        if(!strcmp("Módulo", $operacion)) {
            echo ($primerNumero % $segundoNumero);
        }

    }

?>

</body>
</html>
