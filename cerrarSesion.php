<?php
  //Con este php cerramos la sesión del usuario y regresamos a la página con el formulario de iniciar sesión
  session_name("usuario");
  session_id("12345678");
  session_start();
  session_unset();
  session_destroy();
  header('Location: iniciarSesion.php');
?>
