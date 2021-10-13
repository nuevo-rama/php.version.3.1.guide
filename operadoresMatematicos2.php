<?php

    if(isset ($_POST["button"])) {
        $primerNumero= $_POST["num1"];
        $segundoNumero= $_POST["num2"];
        $operacion= $_POST["operacion"];

        calculos($operacion, $primerNumero, $segundoNumero);
    }    

    

    function calculos($operacion, $primerNumero, $segundoNumero){

        if(!strcmp("Suma", $operacion)) {
            $resultado = $primerNumero + $segundoNumero;
            echo "Resultado: " . $resultado;
        }
        if(!strcmp("Resta", $operacion)) {
            $resultado = $primerNumero - $segundoNumero;
            echo "Resultado: " . $resultado;
        }
        if(!strcmp("Multiplicación", $operacion)) {
            $resultado = $primerNumero * $segundoNumero;
            echo "Resultado: " . $resultado;
        }
        if(!strcmp("División", $operacion)) {
            $resultado = $primerNumero / $segundoNumero;
            echo "Resultado: " . $resultado;
        }
        if(!strcmp("Módulo", $operacion)) {
            $resultado = $primerNumero % $segundoNumero;
            echo "Resultado: " . $resultado;
        }
    }
    
?>
