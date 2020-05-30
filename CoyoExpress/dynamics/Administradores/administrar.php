<?php
  $boton = (isset($_POST['boton'])) ? $_POST['boton']:""; //Ternario
  echo '<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <link rel="stylesheet" href="../../statics/css/administradores.css">
            <link rel="icon" href="../../statics/img/prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Productos</title>
          </head>
          <body>';
  include '../conexion.php';
  if ($boton == "Productos")
  {
    if ($conexion)
    {
      $consulta = "SELECT * FROM producto";
      $respuesta = mysqli_query($conexion, $consulta);
      //$row = mysqli_fetch_array($respuesta);
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
      echo "</table><br><br>
            <form action='administrarProductos.php' method='post'>
              <select name='accion' required>
                <option value='Agregar'>Agregar</option>
                <option value='Modificar'>Modificar</option>
                <option value='Eliminar'>Eliminar</option>
              </select><br><br>
              <input type='submit' name='boton' value='Continuar'><br><br>
              <a href='administradores.php'><label>Regresar</label></a>
            </form>
          </body>
        </html>";
    }
  }
  if ($boton == "Usuarios")
  {
    if ($conexion)
    {
      $consulta = "SELECT * FROM usuario";
      $respuesta = mysqli_query($conexion, $consulta);
      //$row = mysqli_fetch_array($respuesta);
      echo "<table>
              <th>ID usuario</th>
              <th>Tipo de usuario</th>
              <th>Nombre</th>
              <th>Contraseña</th>";
      while ($row = mysqli_fetch_array($respuesta))
      {
        echo "<tr>
                <td>".$row[0]."</td>
                <td>".$row[1]."</td>
                <td>".$row[2]."</td>
                <td>".$row[3]."</td>
              </tr>";
      }
      echo "</table>
            <form action='administrarUsuarios.php' method='post'>
              <select name='accion' required>
                <option value='Modificar'>Modificar</option>
                <option value='Eliminar'>Eliminar</option>
              </select><br><br>
              <input type='submit' name='boton' value='Continuar'><br><br>
              <a href='administradores.php'><label>Regresar</label></a>
            </form>
          </body>
        </html>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
