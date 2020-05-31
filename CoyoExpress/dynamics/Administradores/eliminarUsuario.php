<?php
  include '../conexion.php';
  if (isset($_POST['idUsuario'])) {
    $idUsuario = strip_tags($_POST['idUsuario']);
    if ($conexion) {
      $sql = "DELETE FROM usuario WHERE id_Usuario IN($idUsuario)";
      mysqli_query($conexion, $sql);
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
                <label>Usuario eliminado!</label><br><br>
                <a href='administrarUsuarios.php'><label>Regresar</label></a>
                </body>
              </html>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
