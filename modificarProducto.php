<?php
  include 'conexion.php';
  if (isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['imagen']) && isset($_POST['cantidad']) && isset($_POST['idProducto']))
  {
    $pro=["Nombre","Precio","Imagen","Cantidad"];
    $mod=[
      $_POST['nombre'],
      $_POST['precio'],
      $_POST['imagen'],
      $_POST['cantidad'],
      $_POST['idProducto']];
    if ($conexion)
    {
      //$sql = ("UPDATE producto SET (\"$nombre\", $precio, \"$imagen\", $cantidad) WHERE id_Producto IN (id_Producto)");
                            /*$nombre,
                            $precio,
                            $imagen,
                            $cantidad);*/
      for ($i=0; $i<4; $i++)
      {
        $sql="UPDATE producto SET $pro[$i]=\"$mod[$i]\" WHERE id_Producto IN(32)";
        mysqli_query($conexion, $sql);
      }

      echo "<label>Producto modificado!</label><br><br>
            <a href='administrarProductos.php'>Regresar</a>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
