<?php
  echo '<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <link rel="stylesheet" href="../../statics/css/supervisores.css">
            <link rel="icon" href="../statics/img/prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Pedidos</title>
          </head>
          <body>
            <table border="1">
              <tr>
                <th>id Pedido</th>
                <th>Nombre</th>
                <th>Producto</th>
                <th>Dirección</th>
                <th>Fecha</th>
              </tr>';
  include '../conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  if ($conexion) //Si la conexión con la base de datos fue exitosa
  {
    $consulta = "SELECT * FROM pedido LEFT JOIN usuario ON pedido.id_usuario = usuario.id_usuario LEFT JOIN producto ON pedido.id_Producto=producto.id_Producto LEFT JOIN Dirección ON pedido.id_Direccion = Dirección.id_Dirección";//Toma los nombres para poder mostrarlos en vez de los id.
    $respuesta= mysqli_query($conexion,$consulta);
    while ($row = mysqli_fetch_array($respuesta))//Muestra los pedidos hechos
    {
      echo "<tr>
              <td>".$row[0]."</td>
              <td>".$row[7]."</td>
              <td>".$row[9]."</td>
              <td>".$row[15]."</td>
              <td>".$row[4]."</td>
            </tr>";
    }
    echo "</table>
        <br>
        <a href='supervisores.php'><label>Regresar</label></a>
      </body>
    </html>";
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
