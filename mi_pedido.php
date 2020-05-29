<?php
  $agua = (isset($_POST['Agua']) && $_POST['Agua'] != "") ? $_POST['Agua'] : "No pediste";
  $cafe = (isset($_POST['Cafe']) && $_POST['Cafe'] != "") ? $_POST['Cafe'] : "No pediste";
  $sandwich = (isset($_POST['Sandwich']) && $_POST['Sandwich'] != "") ? $_POST['Sandwich'] : "No pediste";
  $papas = (isset($_POST['Papas']) && $_POST['Papas'] != "") ? $_POST['Papas'] : "No pediste";
  $galletas = (isset($_POST['Galletas']) && $_POST['Galletas'] != "") ? $_POST['Galletas'] : "No pediste";
  $dulces = (isset($_POST['Dulces']) && $_POST['Dulces'] != "") ? $_POST['Dulces'] : "No pediste";
  $elote = (isset($_POST['Elote']) && $_POST['Agua'] != "") ? $_POST['Elote'] : "No pediste";
  $esquite = (isset($_POST['Esquites']) && $_POST['Esquites'] != "") ? $_POST['Esquites'] : "No pediste";
  $helado = (isset($_POST['Helado']) && $_POST['Helado'] != "") ? $_POST['Helado'] : "No pediste";
  $chilaquiles = (isset($_POST['Chilaquiles']) && $_POST['Chilaquiles'] != "") ? $_POST['Chilaquiles'] : "No pediste";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    usuario tu pedido es: <br>
    Agua: <?php echo $agua; ?>  <br>
    Cafe: <?php echo $cafe; ?>  <br>
    Sandwich: <?php echo $sandwich; ?>  <br>
    Papas: <?php echo $papas; ?>  <br>
    Galletas: <?php echo $galletas; ?>  <br>
    Dulces: <?php echo $dulces; ?>  <br>
    Chilaquiles <?php echo $chilaquiles; ?>  <br>
    Esquites <?php echo $esquite; ?>  <br>
    Elotes <?php echo $elote; ?>  <br>
    Helado <?php echo $helado; ?>  <br>
    

  </body>
</html>
