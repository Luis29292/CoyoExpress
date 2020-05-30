<?php
  //------Página de Registro de usuarios------
  //Aquí pedimos al usuario que se dé de alta en el sistema, pidiéndole información como: Número de cuenta, RFC o Número de trabajador, Nombre, Apellido Paterno, Apellido Materno y una Contraseña
  echo '<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <link rel="stylesheet" href="../../statics/css/registrarse.css">
            <link rel="icon" href="../../statics/img/prepa6.png">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
            <meta charset="utf-8">
            <title>Coyo Express: Registro</title>
          </head>';
  if (isset($_POST['tipoUsu'])) //Verificamos que esté definido (que no sea NULL) el tipo de usuario enviado en el formulario
  {
    $tipoUsu = $_POST['tipoUsu']; //Almacenamos en $tipoUsu el tipo de usuario que se seleccionó
    if ($tipoUsu == "Alumno") //Si el usuario es un alumno, imprimimos en pantalla su respetivo formulario
    {
      echo '<body>
              <div class="container1">
                <img class="logo" src="../../statics/img/logo.png" alt="Coyo Express">
              </div>
              <div class="container2">
                <form action="validacionRegistro.php" method="post">
                  <fieldset>
                    <legend><h2>Registrarse</h2></legend>
                    <label class="datos">Número de Cuenta: </label><input class="inputs" type="text" name="identificador" required><br><br>
                    <label class="datos">Nombre: </label><input class="inputs" type="text" name="nombre" pattern="([A-ZÁÉÍÓÚÑ][a-záéíóúñ]*\s?){1,}" required title="El nombre(s) debe empezar en mayúscula y continuar en minúscula"><br><br>
                    <label class="datos">Apellido Paterno: </label><input class="inputs" type="text" name="apePaterno" pattern="[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*" required title="El Apellido debe empezar en mayúscula y terminar en minúscula"><br><br>
                    <label class="datos">Apellido Materno: </label><input class="inputs" type="text" name="apeMaterno" pattern="[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*" required title="El Apellido debe empezar en mayúscula y terminar en minúscula"><br><br>
                    <label class="datos">Contraseña: </label><input class="inputs" type="password" name="contra" required pattern="(?=.*[A-Z])(?=.*[\.,!@#$&*])(?=.*[0-9])(?=.*[a-z]).{10,}"><br><br>
                    <label class="datos">¡Gracias por preferir Coyo Express!</label><br><br>
                    <input class="enviar" type="submit" name="enviar" value="Enviar"><br><br>
                    <a href="../Sesion/iniciarSesion.php"><label>¿Ya tienes una cuenta con nosotros? Inicia Sesión!</label></a>
                  </fieldset>
                </form>
              </div>
            </body>';
    }
    if ($tipoUsu == "Profesor") //Si el usuario es un profesor o funcionario, imprimimos en pantalla su respetivo formulario
    {
      echo '<body>
              <div class="container1">
                <img class="logo" src="../../statics/img/logo.png" alt="Coyo Express">
              </div>
              <div class="container2">
                <form action="validacionRegistro.php" method="post">
                  <fieldset>
                    <legend><h2>Registrarse</h2></legend>
                    <label class="datos">RFC: </label><input class="inputs" type="text" name="identificador" pattern="[A-Z]{4}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])([0-9]|[A-Z]){3}" required title="Debe seguir el formato de RFC"><br><br>
                    <label class="datos">Nombre: </label><input class="inputs" type="text" name="nombre" pattern="([A-ZÁÉÍÓÚÑ][a-záéíóúñ]*\s?){1,}" required title="El nombre(s) debe empezar en mayúscula y continuar en minúscula"><br><br>
                    <label class="datos">Apellido Paterno: </label><input class="inputs" type="text" name="apePaterno" pattern="[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*" required title="El Apellido debe empezar en mayúscula y terminar en minúscula"><br><br>
                    <label class="datos">Apellido Materno: </label><input class="inputs" type="text" name="apeMaterno" pattern="[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*" required title="El Apellido debe empezar en mayúscula y terminar en minúscula"><br><br>
                    <label class="datos">Contraseña: </label><input class="inputs" type="password" name="contra" required pattern="(?=.*[A-Z])(?=.*[\.,!@#$&*])(?=.*[0-9])(?=.*[a-z]).{10,}"><br><br>
                    <label class="datos">¡Gracias por preferir Coyo Express!</label><br><br>
                    <input class="enviar" type="submit" name="enviar" value="Enviar"><br><br>
                    <a href="../Sesion/iniciarSesion.php"><label>¿Ya tienes una cuenta con nosotros? Inicia Sesión!</label></a>
                  </fieldset>
                </form>
              </div>
            </body>';
    }
    if ($tipoUsu == "Trabajador") //Si el usuario es un trabajador, imprimimos en pantalla su respetivo formulario
    {
      echo '<body>
              <div class="container1">
                <img class="logo" src="../../statics/img/logo.png" alt="Coyo Express">
              </div>
              <div class="container2">
                <form action="validacionRegistro.php" method="post">
                  <fieldset>
                    <legend><h2>Registrarse</h2></legend>
                    <label class="datos">Número de trabajador: </label><input class="inputs" type="text" name="identificador" required><br><br>
                    <label class="datos">Nombre: </label><input class="inputs" type="text" name="nombre" pattern="([A-ZÁÉÍÓÚÑ][a-záéíóúñ]*\s?){1,}" required title="El nombre(s) debe empezar en mayúscula y continuar en minúscula"><br><br>
                    <label class="datos">Apellido Paterno: </label><input class="inputs" type="text" name="apePaterno" pattern="[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*" required title="El Apellido debe empezar en mayúscula y terminar en minúscula"><br><br>
                    <label class="datos">Apellido Materno: </label><input class="inputs" type="text" name="apeMaterno" pattern="[A-ZÁÉÍÓÚÑ][a-záéíóúñ]*" required title="El Apellido debe empezar en mayúscula y terminar en minúscula"><br><br>
                    <label class="datos">Contraseña: </label><input class="inputs" type="password" name="contra" required pattern="(?=.*[A-Z])(?=.*[\.,!@#$&*])(?=.*[0-9])(?=.*[a-z]).{10,}"><br><br>
                    <label class="datos">¡Gracias por preferir Coyo Express!</label><br><br>
                    <input class="enviar" type="submit" name="enviar" value="Enviar"><br><br>
                    <a href="../Sesion/iniciarSesion.php"><label>¿Ya tienes una cuenta con nosotros? Inicia Sesión!</label></a>
                  </fieldset>
                </form>
              </div>
            </body>';
    }
  }
  else //Aquí tenemos la continuación del HTML donde imprimimos en pantalla un "select" para saber qué usuario se registrará
  {
    echo '<body>
            <div class="container1">
              <img class="logo" src="../../statics/img/logo.png" alt="Coyo Express">
            </div>
            <div class="container2">
              <form style="padding: 24% 0% 0% 10%; " action="registrarse.php" method="post">
                <fieldset>
                  <legend><h2>Registrarse</h2></legend>
                  <label class="datos">¿Eres?... </label><select class="opciones" name="tipoUsu" required>
                    <option value="Alumno">Alumno</option>
                    <option value="Profesor">Profesor / Funcionario</option>
                    <option value="Trabajador">Trabajador</option>
                  </select><br><br>
                  <input class="enviar" type="submit" name="enviar" value="Enviar"><br><br>
                </fieldset>
              </form>
            </div>
          </body>
        </html>';
  }

?>
