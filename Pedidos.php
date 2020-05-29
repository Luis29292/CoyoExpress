<?php
$agua = 20;
$cafe = 25;
$sandwich = 30;
$papas = 15;
$galletas = 18;
$dulces = 15;
$elote = 24;
$esquite = 22;
$helado = 10;
$chilaquiles = 35;
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Selecciona tu comida</title>
    <link rel="stylesheet" type="text/css" href="Proyecto/Pedidos.css">
    <style media="screen">
      img{
        width: 100px;
        height: 100px;
      }
    </style>
  </head>
  <body>
    <h1>Menu</h1>
    <form class="" action="mi_pedido.php" method="post">
    <div class="Agua">
      <img  src="https://static.diariofemenino.com/pictures/articulos/215000/215301-4.jpg" alt="Agua"> <br>
        Cantidad<select class="cantidad" name="Agua">
          <option value="">SELECIONA UNA CANTIDAD</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
              </select>
              Precio $ <?php echo $agua; ?>
    </div>
    <div class="Cafe">
      <img  src="https://www.ecestaticos.com/imagestatic/clipping/1b2/113/1b21131793b5003905419eb329e1692f/el-cafe-no-es-malo-pero-hasta-que-cantidad-se-puede-tomar.jpg?mtime=1531916182" alt="Cafe"> <br>
        Cantidad<select class="cantidad" name="Cafe">
          <option value="">SELECIONA UNA CANTIDAD</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
              </select>
              Precio $ <?php echo $cafe; ?>
    </div>
    <div class="Sandwich">
      <img  src="https://truffle-assets.imgix.net/0bb1ea8e-tuna-sandwich-landscape.jpg" alt="Sandwich"> <br>
        Cantidad<select class="cantidad" name="Cafe">
          <option value="">SELECIONA UNA CANTIDAD</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
              </select>
              Precio $ <?php echo $sandwich; ?>
    </div>
    <div class="Papas">
      <img  src="https://danzadefogones.com/wp-content/uploads/2020/04/Patatas-Fritas-al-Horno-3.jpg" alt="Papas"> <br>
        Cantidad<select class="cantidad" name="Papas">
          <option value="">SELECIONA UNA CANTIDAD</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
              </select>
        Precio $ <?php echo $papas; ?>
    </div>
    <div class="Galletas">
      <img  src="https://elgourmet.s3.amazonaws.com/recetas/cover/galle_ipRG4rtdhqbv9V7l1PkHSauUnmf8oD.png" alt="Galletas"> <br>
        Cantidad<select class="cantidad" name="Galletas">
          <option value="">SELECIONA UNA CANTIDAD</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
              </select>
            Precio $ <?php echo $galletas; ?>
    </div>
    <div class="Dulces">
      <img  src="https://image.freepik.com/foto-gratis/manojo-caramelos-coloridos_23-2147689700.jpg " alt="Dulces"> <br>
        Cantidad<select class="cantidad" name="Dulces">
          <option value="">SELECIONA UNA CANTIDAD</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
              </select>
                Precio $ <?php echo $dulces; ?>
    </div>
    <div class="Chilaquiles">
      <img  src="https://i.pinimg.com/originals/d2/c9/56/d2c956f20be73e9f70de9b9870c70445.jpg" alt="Chilaquiles"> <br>
        Cantidad<select class="cantidad" name="Chilaquiles">
          <option value="">SELECIONA UNA CANTIDAD</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
              </select>
                Precio $ <?php echo $chilaquiles; ?>
    </div>
    <div class="Elote">
      <img  src="https://cocinarrecetasdepostres.net/wp-content/uploads/2019/12/Receta-Elote-Autentico-maiz-mexicano-en-la-mazorca.jpg" alt="Elote"> <br>
        Cantidad<select class="cantidad" name="Elote">
          <option value="">SELECIONA UNA CANTIDAD</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
              </select>
                Precio $ <?php echo $elote; ?>
    </div>
    <div class="Esquites">
      <img  src="https://dam.cocinafacil.com.mx/wp-content/uploads/2018/12/esquite-tradicional.jpg" alt=Esquites> <br>
        Cantidad<select class="cantidad" name="Esquites">
          <option value="">SELECIONA UNA CANTIDAD</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
              </select>
              Precio $ <?php echo $esquite; ?>
    </div>
    <div class="Helado">
      <img src="https://t1.rg.ltmcdn.com/es/images/5/4/0/helado_de_vainilla_casero_74045_orig.jpg" alt="Helado"> <br>
        Cantidad<select class="cantidad" name="Helado">
          <option value="">SELECIONA UNA CANTIDAD</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
              </select>
              Precio $ <?php echo $helado; ?>
    </div>
<input type="submit" name="Enviar" value="Enviar">

  </form>
  </body>
</html>
