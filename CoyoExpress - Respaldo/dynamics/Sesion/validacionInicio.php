<?php
  include '../conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
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
        //Imprimimos en pantalla un HTML donde se le pide al usuario que primero se registre antes de iniciar sesión o si ya está registrado que ingrese correctamente sus datos
        echo "<!DOCTYPE html>
              <html lang='en'dir='ltr'>
                <head>
                  <link rel='stylesheet' href='../../statics/css/iniciarSesion.css'>
                  <link rel='icon' href='../../statics/img/prepa6.png'>
                  <link href='https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap' rel='stylesheet'>
                  <meta charset='utf-8'>
                  <title>Validando...</title>
                </head>
                <body>
                  <div style='width: 200px;'>
                    <label>Aún no estás registrado!</label><br><br>
                    <a href='../Registro/registrarse.php'><label>Registrarse</label></a><br><br>
                    <label>Si ya estás registrado <br> verifica tus datos!</label><br><br>
                    <a href='../Sesion/iniciarSesion.php'><label>Regresar</label></a>
                  </div>
                </body>
              </html>";
      }
      else //Si la matriz ($row) no está vacía...
      {
        $consulta2 = "SELECT id_Usuario FROM usuario WHERE id_Usuario = '$numCuenta' AND id_tipo = 1 AND Contrasena = '$contrasena'"; //Almacenamos la consulta que queremos realizar en $consulta2
        $respuesta2 = mysqli_query($conexion, $consulta2); //Segunda consulta que realizaremos a la base de datos para verificar si el usuario es un administrador del sistema
        $row2 = mysqli_fetch_array($respuesta2); //Con esta función obtenemos en una matriz (asociativa, numérica o ambas) los datos que recibimos de la base
        if ($row2 != false) //Si la matriz ($row2) no está vacía...
        {
          session_name("usuario");
          session_id("12345678");
          session_start();
          $_SESSION['numC']=$numCuenta;
          header('Location: ../Administradores/administradores.php'); //Redirigimos al usuario a la página de administradores
        }
        $consulta3 = "SELECT id_Usuario FROM usuario WHERE id_Usuario = '$numCuenta' AND id_tipo = 2 AND Contrasena = '$contrasena'"; //Almacenamos la consulta que queremos realizar en $consulta3
        $respuesta3 = mysqli_query($conexion, $consulta3); //Tercer consulta que realizaremos a la base de datos para verificar si el usuario es un supervisor de pedidos
        $row2 = mysqli_fetch_array($respuesta3); //Con esta función obtenemos en una matriz (asociativa, numérica o ambas) los datos que recibimos de la base
        if ($row2 != false) //Si la matriz ($row2) no está vacía...
        {
          session_name("usuario");
          session_id("12345678");
          session_start();
          $_SESSION['numC']=$numCuenta;
          header('Location: ../Supervisores/supervisores.php'); //Redirigimos al usuario a la página de supervisores
        }
        $consulta4 = "SELECT id_Usuario FROM usuario WHERE id_Usuario = '$numCuenta' AND id_tipo = 4 OR id_tipo = 5 OR id_tipo = 6 AND Contrasena = '$contrasena'"; //Almacenamos la consulta que queremos realizar en $consulta4
        $respuesta4 = mysqli_query($conexion, $consulta4); //Cuarta consulta que realizaremos a la base de datos para verificar si el usuario es un cliente
        $row3 = mysqli_fetch_array($respuesta4); //Con esta función obtenemos en una matriz (asociativa, numérica o ambas) los datos que recibimos de la base
        if ($row3 != false) //Si la matriz ($row3) no está vacía...
        {
          session_name("usuario");
          session_id("12345678");
          session_start();
          $_SESSION['numC']=$numCuenta;
          header('Location: ../principal.php'); //Redirigimos al usuario a la página principal
        }
      }
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
