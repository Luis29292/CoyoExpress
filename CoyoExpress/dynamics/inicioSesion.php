<?php
  //Con este php iniciamos la sesión del usuario
  session_name("usuario");//El nombre de la sesión para que funcione en todos los códigos
  session_id("12345678");
  session_start();
  $_SESSION['numC']=$numCuenta;//Almacena en la sesión el número de cuenta del usuario
?>
