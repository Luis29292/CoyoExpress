<?php
  //------Página de Registro de usuarios------
  echo '<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <link rel="stylesheet" href="registrarse.css">
            <link rel="icon" href="prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Registro</title>
          </head>
          <body>
            <div class="container1">
              <img class="logo" src="logo.png" alt="Coyo Express">
            </div>
            <div class="container2">
              <form class="" action="principal.html" method="post">
                <fieldset>
                  <legend><h2>Registrarse</h2></legend>
                  <label class="datos">Número de Cuenta: </label><input class="inputs" type="text" name="numCuenta" required><br><br>
                  <label class="datos">Nombre: </label><input class="inputs" type="text" name="nombre" pattern="([A-ZÁÉÍÓÚÑ][a-záéíóúñ]*\s?){1,}" required title="El nombre(s) debe empezar en mayúscula y continuar en minúscula"><br><br>
                  <label class="datos">Apellido Paterno: </label><input class="inputs" type="text" name="apePaterno" pattern="[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*" required title="El Apellido debe empezar en mayúscula y terminar en minúscula"><br><br>
                  <label class="datos">Apellido Materno: </label><input class="inputs" type="text" name="apeMaterno" pattern="[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*" required title="El Apellido debe empezar en mayúscula y terminar en minúscula"><br><br>
                  <label class="datos">Contraseña: </label><input class="inputs" type="password" name="contra" required pattern="(?=.*[A-Z])(?=.*[\.,!@#$&*])(?=.*[0-9])(?=.*[a-z]).{10,}"><br><br>
                  <label class="datos">¿Eres?... </label><select class="opciones" name="tipoUsu" required>
                    <option value="Alumno">Alumno</option>
                    <option value="Profesor">Profesor / Funcionario</option>
                    <option value="Trabajador">Trabajador</option>
                  </select><br><br>
                  <label class="datos">¡Gracias por preferir Coyo Express!</label><br><br>
                  <input class="enviar" type="submit" name="enviar" value="Enviar"><br><br>
                  <a href="iniciarSesion.php"><label>¿Ya tienes una cuenta con nosotros? Inicia Sesión!</label></a>
                </fieldset>
              </form>
            </div>
          </body>
        </html>';
?>
