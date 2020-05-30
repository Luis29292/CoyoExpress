<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <table border="1">
        <tr>
          <th>id Pedido</th>
          <th>Nombre</th>
          <th>Producto</th>
          <th>Dirección</th>
          <th>Fecha</th>
        </tr>
        <?php
        $conexion = mysqli_connect("localhost","root","","CoyoExpress");
        if( !$conexion ){
          echo mysqli_conect_error();
          echo mysqli_conect_errno();
          exit();
        }
        $consulta = "SELECT * FROM pedido LEFT JOIN usuario ON pedido.id_usuario = usuario.id_usuario LEFT JOIN producto ON pedido.id_Producto=producto.id_Producto LEFT JOIN Dirección ON pedido.id_Direccion = Dirección.id_Dirección";
        $respuesta= mysqli_query($conexion,$consulta);
        while ($row = mysqli_fetch_array($respuesta))
        {
          echo
          "
            <tr>
              <td>".$row[0]."</td>
              <td>".$row[7]."</td>
              <td>".$row[9]."</td>
              <td>".$row[15]."</td>
              <td>".$row[4]."</td>
            </tr>";
        }
        ?>
      </table>
      <br>
      <a href="supervisores.php">Volver</a>
    </body>
  </html>
