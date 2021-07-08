<?php

  function incrementaVariable () {
     static $contador=0; //variable estática
    $contador++;
    
    echo $contador . "<br>";
  }
  
  incrementaVariable(); //devuelve 1
  incrementaVariable(); //devuelve 2
  incrementaVariable(); //devuelve 3
  incrementaVariable(); //devuelve 4
    
?>
