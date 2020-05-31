<?php
  include '../conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  if (isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['imagen']) && isset($_POST['cantidad']) && isset($_POST['idProducto']))
  {
    $anteriorProducto = ["Nombre","Precio","Imagen","Cantidad"]; //Aquí guardamos los encabezados (Nombre, Precio, Imagen y Cantidad) de la tabla "producto" de la base de datos en un arreglo
    $modificacion = [ //Aquí guardamos en un arreglo los datos enviados por método "POST" (nombre, precio, imagen y idProducto) que vamos a insertar en la tabla "producto"
      strip_tags($_POST['nombre']),
      strip_tags($_POST['precio']),
      strip_tags($_POST['imagen']),
      strip_tags($_POST['cantidad'])];
      $idProducto = $_POST['idProducto']; //Aquí almancenamos en la variable $idProducto el ID del producto que se ingresó en el formulario
    if ($conexion) //Si la conexión con la base de datos fue exitosa
    {
      for ($i=0; $i < 4; $i++) //Con este "for"
      {
        $sql = "UPDATE producto SET $anteriorProducto[$i] = \"$modificacion[$i]\" WHERE id_Producto IN ($idProducto)";
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
                <label>Producto modificado!</label><br><br>
                <a href='administrarProductos.php'><label>Regresar</label></a>
                </body>
              </html>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
