<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    $lunghezza=$_GET['lunghezza'];
    $larghezza=$_GET['larghezza'];
    $altezza=$_GET['altezza'];
    $volume=$lunghezza * $larghezza * $altezza;
    ?>
  </head>
  <body>
    <p>Lunghezza é:<?php echo $lunghezza?></p>
    <p>Larghezza è:<?php echo $larghezza?></p>
    <p>Altezza è:<?php echo $altezza?></p>
    <p>Volume è:<?php echo $volume?></p>
  </body>
</html>
