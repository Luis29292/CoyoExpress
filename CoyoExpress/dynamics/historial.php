<?php
  echo '<!DOCTYPE html>
        <html lang="esp" dir="ltr">
          <head>
          <link rel="stylesheet" href="../statics/css/principal.css">
            <link rel="icon" href="../statics/img/prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Historial</title>
          </head>
          <body>
            <table>
              <tr>
                <th>id Pedido</th>
                <th>Producto</th>
                <th>Dirección</th>
                <th>Fecha</th>
              </tr>';
  session_name("usuario");
  session_id("12345678");
  session_start();
  $numC=$_SESSION['numC'];
  include './conexion.php';
  if ($conexion)
  {
    $numC = mysqli_real_escape_string ($conexion , $numC);
    $consulta = "SELECT * FROM pedido LEFT JOIN producto ON pedido.id_Producto=producto.id_Producto LEFT JOIN Dirección ON pedido.id_Direccion = Dirección.id_Dirección WHERE id_usuario IN ($numC)";
    $respuesta= mysqli_query($conexion,$consulta);
    while ($row = mysqli_fetch_array($respuesta))
    {
      echo "<tr>
              <td>".$row[0]."</td>
              <td>".$row[5]."</td>
              <td>".$row[11]."</td>
              <td>".$row[4]."</td>
            </tr>";
    }
  }
  echo '</table>
        <a href="principal.php"><label>Regresar</label></a>
      </body>
    </html>';
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
