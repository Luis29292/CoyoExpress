<?php
  include 'conexion.php';
  if (isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['imagen']) && isset($_POST['cantidad']) && isset($_POST['idProducto']))
  {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $cantidad = $_POST['cantidad'];
    $idProducto = $_POST['idProducto'];
    if ($conexion)
    {
      $sql= sprintf("INSERT INTO producto VALUES ('%s', '%d', '%s', '%d', '%d')",
                            $nombre,
                            $precio,
                            $imagen,
                            $cantidad,
                            $idProducto);
      mysqli_query($conexion, $sql);
      echo "<label>Producto agregado!</label><br><br>
            <a href='administrarProductos.php'>Regresar</a>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
