<?php
  session_name("usuario");
  session_id("12345678");
  session_start();
  $nC=$_SESSION['numC']; //Guarda el número de cuenta en la sesión
  $producto = $_POST['producto'];
  $direccion = $_POST['direccion'];
  include 'conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  $nC = mysqli_real_escape_string ($conexion , $nC);
  $producto = mysqli_real_escape_string ($conexion , $producto);
  $direccion = mysqli_real_escape_string ($conexion , $direccion);
  if ($conexion) //Si la conexión con la base de datos fue exitosa
  {
    $pedido = "INSERT INTO pedido (id_usuario, id_Producto, id_Direccion) VALUES ($nC,$producto,$direccion)";
    mysqli_query($conexion, $pedido);
    echo "<!DOCTYPE html>
          <html lang='en'dir='ltr'>
            <head>
              <link rel='stylesheet' href='../statics/css/administradores.css'>
              <link rel='icon' href='../statics/img/prepa6.png'>
              <link href='https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap' rel='stylesheet'>
              <meta charset='utf-8'>
              <title>Validando...</title>
            </head>
            <body>
              <label>Se realizó el pedido con éxito!</label><br><br>
              <a href='principal.php'><label>Regresar</label></a>
            </body>
          </html>";
    setcookie("PedidoTiempo",$nC,time()+300);
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
