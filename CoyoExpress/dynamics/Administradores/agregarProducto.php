<?php
  include '../conexion.php';
  if (isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['imagen']) && isset($_POST['cantidad']))
  {
    $nombre = strip_tags($_POST['nombre']);//Le arranca las etiquetas para evitar inyecciones
    $precio = strip_tags($_POST['precio']);
    $imagen = strip_tags($_POST['imagen']);
    $cantidad = strip_tags($_POST['cantidad']);
    if ($conexion)
    {
      $nombre = mysqli_real_escape_string ($conexion , $nombre );//Lo convierte para seguridad de la base de datos
      $precio = mysqli_real_escape_string ($conexion , $precio );
      $imagen = mysqli_real_escape_string ($conexion , $imagen );
      $cantidad = mysqli_real_escape_string ($conexion , $cantidad );

      $sql= sprintf("INSERT INTO producto (Nombre, Precio, Imagen, Cantidad) VALUES ('%s', '%d', '%s', '%d')",
                            $nombre,
                            $precio,
                            $imagen,
                            $cantidad);
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
                <label>Producto agregado!</label><br><br>
                <a href='administrarProductos.php'><label>Regresar</label></a>
              </body>
            </html>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
