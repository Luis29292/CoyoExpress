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
      $sql = sprintf("UPDATE producto SET ('%s', '%d', '%s', '%d') WHERE id_Producto = '$idProducto'",
                            $nombre,
                            $precio,
                            $imagen,
                            $cantidad);
      mysqli_query($conexion, $sql);
      echo "<label>Producto modificado!</label><br><br>
            <a href='administrarProductos.php'>Regresar</a>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
