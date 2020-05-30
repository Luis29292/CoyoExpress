<?php
  include '../conexion.php'; //Incluimos "conexion.php" para generar la conexión con la base de datos
  if (isset($_POST['idUsuario']) && isset($_POST['modifDatos']) && isset($_POST['modificacion']))
  {
    $idUsuario = $_POST['idUsuario'];
    $modifDatos = $_POST['modifDatos'];
    $modificacion = $_POST['modificacion'];
    if ($modificacion == "idTipo")
    {
      $sql = "UPDATE usuario SET id_tipo = $modificacion WHERE id_Usuario = '$idUsuario'";
      mysqli_query($conexion, $sql);
    }
    if ($modifDatos == "Nombre")
    {
      $sql = "UPDATE usuario SET Nombre = $modificacion WHERE id_Usuario = '$idUsuario'";
      mysqli_query($conexion, $sql);
    }
    echo "<label>Dato modificado!</label><br><br>
          <a href='administrarUsuarios.php'>Regresar</a>";
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
