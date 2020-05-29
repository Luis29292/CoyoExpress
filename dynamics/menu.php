<!DOCTYPE html>
<html lang="esp" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menú</title>
  </head>
  <body>
    <form action="">
      <center>
        <table border="1">
          <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Elegir</th>
          </tr>
          <?php
          $conexion = mysqli_connect("localhost", "root", "", "CoyoExpress");
          if( !$conexion ){//Checa que la conexión sea exitosa
            echo mysqli_conect_error();
            echo mysqli_conect_errno();
            exit();
          }
          $consulta= "SELECT * FROM producto WHERE cantidad>0";//Agarra todos las carreras
          $respuesta = mysqli_query($conexion,$consulta);
          while ($row = mysqli_fetch_array($respuesta))
          {
            echo
            "
              <tr>
                <td>".$row[0]."</td>
                <td>$".$row[1]."</td>
                <td><img src='".$row[2]."' width='200' height='200'></td>
                <td><input type='radio' name='prod' value='".$row[3]."'></td>
              </tr>";
          }
          ?>
        </table>
        <hr>
        <input type="submit" value="Comprar">
      </center>
    </form>
  </body>
</html>
