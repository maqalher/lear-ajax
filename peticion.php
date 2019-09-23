<?php
  $nombre = $_POST['nombre'];
  $mail = $_POST['mail'];
  $mensaje = $_POST['mensaje'];

  if($nombre != "" && $mail != "" && $mensaje != ""){
    echo "Correcto";
  }else{
    echo "Incorrecto";
  }
  
?>