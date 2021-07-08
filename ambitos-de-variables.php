<?php
  $nombre="José";

  function dameNombre () {
    global $nombre //se declara a la variable como global
      
    $nombre= "El nombre es " . $nombre
  }

  dameNombre();
  echo $nombre; //retorna El nombre es José
