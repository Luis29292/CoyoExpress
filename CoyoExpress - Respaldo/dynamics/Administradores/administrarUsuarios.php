<?php
  $accion = (isset($_POST['accion'])) ? $_POST['accion']:""; //Ternario
  echo '<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <link rel="stylesheet" href="../../statics/css/administradores.css">
            <link rel="icon" href="../../statics/img/prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Usuarios</title>
          </head>
          <body>';
  include '../conexion.php';
  if ($conexion)
  {
    $consulta = "SELECT * FROM usuario";
    $respuesta = mysqli_query($conexion, $consulta);
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
    echo '</table><br><br>';
    if ($accion == "Modificar") //Checar ID usuario y contraseña.... las puede cambiar el administrador???
    {
      echo '<form action="modificarUsuario.php" method="post">
              <label>ID del usuario: </label><input type="text" name="idUsuario" required><br><br>
              <select name="modifDatos" required>
                <option value="nombre">Nombre del usuario</option>
                <option value="idTipo">ID del tipo de usuario</option>
              </select>
              <input type="text" name="modificacion" required><br><br>
              <input type="submit" name="modificar" value="Modificar usuario"><br><br>
            </form>';
    }
    if ($accion == "Eliminar")
    {
      echo '<form action="eliminarUsuario.php" method="post">
              <label>ID del usuario: </label><input type="text" name="idUsuario" required><br><br>
              <input type="submit" name="eliminar" value="Eliminar usuario"><br><br>
            </form>';
    }
  }
  echo "<a href='administradores.php'><label>Regresar</label></a>
      </body>
    </html>";
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
