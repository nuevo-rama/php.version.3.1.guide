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
  
<?php

    $contador=6;

    do {

        echo "Entrada número: $contador"."<br>";
        $contador++;

    } while ($contador<5);

    echo "Fin del bucle";

?>

</body>
</html>
