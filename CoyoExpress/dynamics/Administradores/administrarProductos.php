<?php
  $accion = (isset($_POST['accion'])) ? $_POST['accion'] : ""; //Ternario
  echo '<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <link rel="stylesheet" href="../../statics/css/administradores.css">
            <link rel="icon" href="../../statics/img/prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Productos</title>
          </head>
          <body>';
  include '../conexion.php';
  if ($conexion)
  {
    $consulta = "SELECT * FROM producto";
    $respuesta = mysqli_query($conexion, $consulta);
    $row = mysqli_fetch_array($respuesta);
    echo "<table>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Cantidad disponible</th>
            <th>ID del producto</th>";
    while ($row = mysqli_fetch_array($respuesta))
    {
      echo "<tr>
              <td>".$row[0]."</td>
              <td>".$row[1]."</td>
              <td>".$row[2]."</td>
              <td>".$row[3]."</td>
              <td>".$row[4]."</td>
            </tr>";
    }
    echo '</table><br><br>';
    if ($accion == "Agregar")
    {
      echo '<form action="agregarProducto.php" method="post">
              <label>Nombre del producto: </label><input type="text" name="nombre" required><br><br>
              <label>Precio: </label><input type="text" name="precio" required><br><br>
              <label>Imagen: </label><input type="text" name="imagen" required><br><br>
              <label>Cantidad: </label><input type="text" name="cantidad" required><br><br>
              <label>ID del producto: </label><input type="text" name="idProducto" required><br><br>
              <input type="submit" name="agregar" value="Agregar producto"><br><br>
            </form>';
    }
    if ($accion == "Modificar")
    {
      echo '<form action="modificarProducto.php" method="post">
              <label>Nombre del producto: </label><input type="text" name="nombre" required ><br><br>
              <label>Precio: </label><input type="text" name="precio" required ><br><br>
              <label>Imagen: </label><input type="text" name="imagen" required ><br><br>
              <label>Cantidad: </label><input type="text" name="cantidad" required ><br><br>
              <label>ID del producto: </label><input type="text" name="idProducto" required ><br><br>
              <input type="submit" name="modificar" value="Modificar producto"><br><br>
            </form>';
    }
    if ($accion == "Eliminar")
    {
      echo '<form action="eliminarProducto.php" method="post">
              <label>ID del producto: </label><input type="text" name="idProducto" required><br><br>
              <input type="submit" name="eliminar" value="Eliminar producto"><br><br>
            </form>';
    }
  }
  echo "<a href='administradores.php'>Regresar</a>
      </body>
    </html>";
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
