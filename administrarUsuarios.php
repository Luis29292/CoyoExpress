<?php
  $boton = $_POST['boton'];
  echo '<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <link rel="stylesheet" href="administradores.css">
            <link rel="icon" href="prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Productos</title>
          </head>
          <body>';
  include 'conexion.php';
  if ($boton == "Agregar")
  {
    if ($conexion)
    {
      $consulta = "SELECT * FROM usuario";
      $respuesta = mysqli_query($conexion, $consulta);
      $row = mysqli_fetch_array($respuesta);
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
    }
  }
?>
