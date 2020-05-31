<?php
  include '../conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  if ($conexion) //Si la conexión con la base de datos fue exitosa
  {
    if (isset($_POST['identificador']) && isset($_POST['nombre']) && isset($_POST['apePaterno']) && isset($_POST['apeMaterno']) && isset($_POST['contra'])) //Verificamos que estén definidos (que no sean NULL) los datos enviados en el formulario
    {
      $identificador = $_POST['identificador']; //Asignamos los datos enviados en las variables ($identificador, $nombre, $apePaterno, $apeMaterno, $contrasena)
      $nombre = strip_tags($_POST['nombre']);
      $apePaterno = strip_tags($_POST['apePaterno']);
      $apeMaterno = strip_tags($_POST['apeMaterno']);
      $contrasena = strip_tags($_POST['contra']);
      $concash = hash('sha256', $contrasena);
      $identificador = mysqli_real_escape_string ($conexion , $identificador );
      $nombre = mysqli_real_escape_string ($conexion , $nombre );
      $apePaterno = mysqli_real_escape_string ($conexion , $apePaterno);
      $apeMaterno = mysqli_real_escape_string ($conexion , $apeMaterno );
      $concash = mysqli_real_escape_string ($conexion , $concash );
      $consulta = "SELECT id_Usuario FROM usuario WHERE id_Usuario IN ($identificador)"; //Almacenamos la consulta que queremos realizar en $consulta
      $respuesta = mysqli_query($conexion, $consulta); //Primera consulta que realizaremos a la base de datos para verificar si el número de cuenta ingresado ya existe en la base
      $row = mysqli_fetch_array($respuesta); //Con esta función obtenemos en una matriz (asociativa, numérica o ambas) los datos que recibimos de la base
      if ($row == false) //Si la matriz ($row) está vacía...
      {
        $sql = sprintf("INSERT INTO usuario (id_Usuario, id_tipo, Nombre, Contrasena) VALUES ('%d', 4, '%s', '%s')", //Almacenamos la inserción que queremos realizar en $consulta2, ocupamos sprintf para esto
                              $identificador,
                              $nombre.' '.$apePaterno.' '.$apeMaterno,
                              $concash);
        mysqli_query($conexion, $sql); //Segunda consulta que realizaremos a la base de datos para verificar que se haga la inserción
        include '../../inicioSesion.php'; //Incluimos "inicioSesion.php" para iniciar la sesión del usuario
        header('Location: ../Sesion/iniciarSesion.php'); //Redirigimos al usuario a "iniciarSesion.php" para que acceda al sistema
      }
      else //Si la matriz ($row) no está vacía...
      {
        //Imprimimos en pantalla un HTML donde le indicamos al usuario que ya se había registrado antes y que ahora inicie sesión
        echo "<!DOCTYPE html>
              <html lang='en'dir='ltr'>
                <head>
                  <link rel='stylesheet' href='../../statics/css/registrarse.css'>
                  <link rel='icon' href='../../statics/img/prepa6.png'>
                  <link href='https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap' rel='stylesheet'>
                  <meta charset='utf-8'>
                  <title>Validando...</title>
                </head>
                <body>
                  <div style='width: 200px;'>
                    <label>Ya te habías registrado!</label><br><br>
                    <a href='../Sesion/iniciarSesion.php' style='background-color: #3D9AAC; border-radius: 4px;'><label>Iniciar Sesión</label></a>
                  </div>
                </body>
              </html>";
      }
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
