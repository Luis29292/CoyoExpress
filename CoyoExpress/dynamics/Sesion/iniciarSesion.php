<?php
  //------Página de Inicio de Sesión------
  //Aquí el usuario inicia sesión para después acceder al sistema, ingresando su Número de cuenta, RFC o Número de trabajador y su Contraseña
  echo '<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <link rel="stylesheet" href="../../statics/css/iniciarSesion.css">
            <link rel="icon" href="../../statics/img/prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Iniciar Sesión</title>
          </head>
          <body>
            <div class="container1">
              <img class="logo" src="../../statics/img/logo.png" alt="Coyo Express">
            </div>
             <div class="container2">
               <form action="validacionInicio.php" method="post">
                 <fieldset>
                   <legend><h2>Iniciar Sesión</h2></legend>
                   <label class="datos">Número de Cuenta: </label><input class="inputs" type="text" name="numCuenta" required><br><br>
                   <label class="datos">Contraseña: </label><input class="inputs" type="password" name="contra" required><br><br>
                   <input class="enviar" type="submit" name="acceder" value="Acceder"><br><br>
                   <a href="../Registro/registrarse.php"><label>¿Aún no tienes una cuenta? Regístrate!</label></a>
                 </fieldset>
               </form>
             </div>
          </body>
        </html>';
?>
