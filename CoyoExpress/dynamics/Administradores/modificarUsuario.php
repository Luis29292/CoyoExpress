<?php
  include '../conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  if (isset($_POST['idUsuario']) && isset($_POST['modifDatos']) && isset($_POST['modificacion']))
  {
    $idUsuario = $_POST['idUsuario'];
    $modifDatos = $_POST['modifDatos'];
    $modificacion = $_POST['modificacion'];
    if ($conexion) //Si la conexión con la base de datos fue exitosa
    {

      if ($modificacion == "idTipo")
      {
        $sql = "UPDATE usuario SET id_tipo = $modificacion WHERE id_Usuario IN ($idUsuario)";
        mysqli_query($conexion, $sql);
      }
      if ($modifDatos == "Nombre")
      {
        $sql = "UPDATE usuario SET Nombre = $modificacion WHERE id_Usuario = '$idUsuario'";
        mysqli_query($conexion, $sql);
      }
      echo "<!DOCTYPE html>
      <html lang='en'dir='ltr'>
      <head>
      <link rel='stylesheet' href='../../statics/css/administradores.css'>
      <link rel='icon' href='../../statics/img/prepa6.png'>
      <link href='https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap' rel='stylesheet'>
      <meta charset='utf-8'>
      <title>Validando...</title>
      </head>
      <body>
      <label>Dato modificado!</label><br><br>
      <a href='administrarUsuarios.php'><label>Regresar</label></a>
      </body>
      </html>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
