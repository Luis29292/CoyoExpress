<?php
  include '../../conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  if ($conexion) //Si la conexión con la base de datos fue exitosa
  {
    if (isset($_POST['identificador']) && isset($_POST['nombre']) && isset($_POST['apePaterno']) && isset($_POST['apeMaterno']) && isset($_POST['contra'])) //Verificamos que estén definidos (que no sean NULL) los datos enviados en el formulario
    {
      $identificador = $_POST['identificador']; //Asignamos los datos enviados en las variables ($identificador, $nombre, $apePaterno, $apeMaterno, $contrasena)
      $nombre = $_POST['nombre'];
      $apePaterno = $_POST['apePaterno'];
      $apeMaterno = $_POST['apeMaterno'];
      $contrasena = $_POST['contra'];
      $consulta = "SELECT id_Usuario FROM usuario WHERE id_Usuario = '$identificador'"; //Almacenamos la consulta que queremos realizar en $consulta
      $respuesta = mysqli_query($conexion, $consulta); //Primera consulta que realizaremos a la base de datos para verificar si el número de cuenta ingresado ya existe en la base
      $row = mysqli_fetch_array($respuesta); //Con esta función obtenemos en una matriz (asociativa, numérica o ambas) los datos que recibimos de la base
      if ($row == false) //Si la matriz ($row) está vacía...
      {
        $sql = sprintf("INSERT INTO usuario (id_Usuario, id_tipo, Nombre, Contrasena) VALUES ('%d', 4, '%s', '%s')", //Almacenamos la inserción que queremos realizar en $consulta2, ocupamos sprintf para esto
                              $identificador,
                              $nombre.' '.$apePaterno.' '.$apeMaterno,
                              $contrasena);
        mysqli_query($conexion, $sql); //Segunda consulta que realizaremos a la base de datos para verificar que se haga la inserción
        include '../../inicioSesion.php';
        header('Location: ../Sesion/iniciarSesion.php'); //Redirigimos al usuario a "iniciarSesion.php" para que acceda al sistema
      }
      else //Si la matriz ($row) no está vacía...
      {
        //Cómo mandar un mensaje para que indique que ya estaba registrado???
        include '../../inicioSesion.php'; //Incluimos "inicioSesion.php" para iniciar la sesión del usuario
        header('Location: ../Sesion/iniciarSesion.php'); //Redirigimos al usuario a "iniciarSesion.php" para que acceda al sistema
      }
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
