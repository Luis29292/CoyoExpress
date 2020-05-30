<?php
  include '../conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  if (isset($_POST['idProducto']))
  {
    $idProducto = $_POST['idProducto'];
    if ($conexion)
    {
      $sql= "DELETE FROM producto WHERE id_Producto = '$idProducto'";
      mysqli_query($conexion, $sql);
      echo "<label>Producto eliminado!</label><br><br>
            <a href='administrarProductos.php'>Regresar</a>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
