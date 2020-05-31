<?php
  include '../conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  if (isset($_POST['idProducto']))
  {
    $idProducto = strip_tags($_POST['idProducto']);
    if ($conexion)
    {
      $sql= "DELETE FROM producto WHERE id_Producto = '$idProducto'";
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
                <label>Producto eliminado!</label><br><br>
                <a href='administrarProductos.php'><label>Regresar</label></a>
                </body>
              </html>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
