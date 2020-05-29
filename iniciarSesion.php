<?php
  //------Página de Inicio de Sesión------
  echo '<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <link rel="stylesheet" href="iniciarSesion.css">
            <link rel="icon" href="prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Iniciar Sesión</title>
          </head>
          <body>
            <div class="container1">
              <img class="logo" src="logo.png" alt="Coyo Express">
            </div>
             <div class="container2">
               <form class="" action="" method="post">
                 <fieldset>
                   <legend><h2>Iniciar Sesión</h2></legend>
                   <label class="datos">Número de Cuenta: </label><input class="inputs" type="text" name="numCuenta" required ><br><br>
                   <label class="datos">Contraseña: </label><input class="inputs" type="password" name="contra" required><br><br>
                   <input class="enviar" type="submit" name="acceder" value="Acceder"><br><br>
                   <a href="registrarse.php"><label>¿Aún no tienes una cuenta? Regístrate!</label></a>
                 </fieldset>
               </form>
             </div>
          </body>
        </html>';
?>
