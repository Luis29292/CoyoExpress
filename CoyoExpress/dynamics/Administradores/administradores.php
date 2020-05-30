<?php
  echo '<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <link rel="stylesheet" href="../../statics/css/administradores.css">
            <link rel="icon" href="../../statics/img/prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Administración</title>
          </head>
          <body>
            <form action="administrar.php" method="post">
              <input type="submit" name="boton" value="Productos"><br><br>
              <input type="submit" name="boton" value="Usuarios"><br><br>
              <a href="../cerrarSesion.php">Cerrar Sesión</a>
            </form>';
  echo '</body>
      </html>';
?>
