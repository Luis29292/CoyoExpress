<?php
  echo '<!DOCTYPE html>
        <html lang="esp" dir="ltr">
          <head>
            <link rel="stylesheet" href="../statics/css/principal.css">
            <link rel="icon" href="../statics/img/prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Menú</title>
          </head>
          <body>
            <form action="pedido.php" method="post">
              <center>
                <table>
                  <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Elegir</th>
                  </tr>';
  include 'conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  $consulta= "SELECT * FROM producto WHERE cantidad > 0";//Agarra todos las carreras
  $respuesta = mysqli_query($conexion,$consulta);
  while ($row = mysqli_fetch_array($respuesta))
  {
    echo "<tr>
            <td>".$row[0]."</td>
            <td>$".$row[1]."</td>
            <td><img src='".$row[2]."' width='200' height='200'></td>
            <td><input type='radio' name='producto' value='".$row[4]."' required></td>
          </tr>";
  }
  echo '</table><br>
        <label>¿Dónde quires recibir el pedido? </label><select name="direccion">';
  $consulta2 = "SELECT * FROM Dirección";
  $respuesta = mysqli_query($conexion,$consulta2);
  while ($row = mysqli_fetch_array($respuesta))
  {
    echo "<option value='".$row[0]."'>".$row[1]."</option>";
  }
  echo '</select>
        <hr>
        <input type="submit" value="Comprar"><br><br>
        <a href="principal.php"><label>Regresar</label></a>
      </center>
    </form>
  </body>
</html>';
?>
