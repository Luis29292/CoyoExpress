<?php
  include 'conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  if ($conexion) //Si la conexión con la base de datos fue exitosa
  {
    if (isset($_POST['numCuenta']) && isset($_POST['contra'])) //Verificamos que estén definidos (que no sean NULL) los datos enviados en el formulario
    {
      $numCuenta = $_POST['numCuenta']; //Asignamos los datos enviados en las variables ($numCuenta y $contrasena)
      $contrasena = $_POST['contra'];
      $consulta = "SELECT id_Usuario FROM usuario WHERE id_Usuario = '$numCuenta'"; //Almacenamos la consulta que queremos realizar en $consulta
      $respuesta = mysqli_query($conexion, $consulta); //Primera consulta que realizaremos a la base de datos para verificar si el número de cuenta ingresado ya existe en la base
      $row = mysqli_fetch_array($respuesta); //Con esta función obtenemos en una matriz (asociativa, numérica o ambas) los datos que recibimos de la base
      if ($row == false) //Si la matriz ($row) está vacía...
      {
        //Cómo mandar un mensaje para que se registre?
        header('Location: registrarse.php'); //Redirigimos al usuario a (registrarse.php) para que se dé de alta antes de iniciar sesión
      }
      else //Si la matriz ($row) no está vacía...
      {
        $consulta2 = "SELECT id_Usuario FROM usuario WHERE id_usuario = '$numCuenta' AND id_tipo = 1 AND Contrasena = '$contrasena'"; //Almacenamos la consulta que queremos realizar en $consulta2
        $respuesta2 = mysqli_query($conexion, $consulta2); //Segunda consulta que realizaremos a la base de datos para verificar si el usuario es un administrador del sistema
        $row2 = mysqli_fetch_array($respuesta2); //Con esta función obtenemos en una matriz (asociativa, numérica o ambas) los datos que recibimos de la base
        if ($row2 != false) //Si la matriz ($row) no está vacía...
        {
          include 'inicioSesion.php'; //Incluimos "inicioSesion.php" para iniciar la sesión del usuario
          header('Location: administradores.php'); //Redirigimos al usuario a la página de administradores
        }
        $consulta3 = "SELECT id_Usuario FROM usuario WHERE id_Usuario = '$numCuenta' AND id_tipo = 2 AND Contrasena = '$contrasena'"; //Almacenamos la consulta que queremos realizar en $consulta3
        $respuesta3 = mysqli_query($conexion, $consulta3); //Tercer consulta que realizaremos a la base de datos para verificar si el usuario es un supervisor de pedidos
        $row2 = mysqli_fetch_array($respuesta3); //Con esta función obtenemos en una matriz (asociativa, numérica o ambas) los datos que recibimos de la base
        if ($row2 != false) //Si la matriz ($row) no está vacía...
        {
          include 'inicioSesion.php'; //Incluimos "inicioSesion.php" para iniciar la sesión del usuario
          header('Location: supervisores.php'); //Redirigimos al usuario a la página de supervisores
        }
        // elseif ($row != false && $row != $row2) {
        //   header('Location: principal.php'); //Redirigimos al usuario a la página principal
        // }
      }
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
