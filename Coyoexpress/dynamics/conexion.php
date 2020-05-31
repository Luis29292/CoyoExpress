<?php
  //Aquí creamos la conexión con la base de datos (CoyoExpress)
  $conexion = mysqli_connect("localhost","root","","CoyoExpress");
  if (!$conexion) //Si la conexion falla, mandamos a pantalla el siguiente texto y y las funciones mysqli_connect_error() y mysqli_connect_errno()
  {
    echo "Failed to connect to MySQL <br>";
    echo mysqli_connect_error();
    echo mysqli_connect_errno();
    exit();
  }
?>
