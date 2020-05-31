<!DOCTYPE html>
<html lang="esp" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Historial</title>
  </head>
  <body>
    <table border=1>
      <tr>
        <th>id Pedido</th>
        <th>Producto</th>
        <th>Dirección</th>
        <th>Fecha</th>
      </tr>
      <?php
      session_name("usuario");
      session_id("12345678");
      session_start();
      $numC=$_SESSION['numC'];
      include './conexion.php';
      $numC = mysqli_real_escape_string ($conexion , $numC);
      $consulta = "SELECT * FROM pedido LEFT JOIN producto ON pedido.id_Producto=producto.id_Producto LEFT JOIN Dirección ON pedido.id_Direccion = Dirección.id_Dirección WHERE id_usuario IN ($numC)";
      $respuesta= mysqli_query($conexion,$consulta);
      while ($row = mysqli_fetch_array($respuesta))
      {
        echo
        "
          <tr>
            <td>".$row[0]."</td>
            <td>".$row[5]."</td>
            <td>".$row[11]."</td>
            <td>".$row[4]."</td>
          </tr>
        ";
      }
      ?>
    </table>
    <a href="principal.php">Regresar</a>
  </body>
</html>
