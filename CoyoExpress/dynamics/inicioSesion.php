<?php
  //Con este php iniciamos la sesión del usuario
  session_name("usuario");
  session_id("12345678");
  session_start();
  $_SESSION['numC']=$numCuenta;
?>
