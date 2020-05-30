<?php
  include '../conexion.php';
  if (isset($_POST['idUsuario'])) {
    $idUsuario = $_POST['idUsuario'];
    if ($conexion) {
      $sql = "DELETE FROM usuario WHERE id_Usuario = '$idUsuario'";
      mysqli_query($conexion, $sql);
      echo "<label>Usuario eliminado!</label><br><br>
            <a href='administrarUsuarios.php'>Regresar</a>";
    }
  }
  mysqli_close($conexion); //Aquí cerramos la conexión con la base de datos (CoyoExpress)
?>
