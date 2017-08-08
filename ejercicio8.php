<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h2>Algoritmo que imprima la suma de todos los numero impares que van del 1 al 100.</h2>
      <?php
      $a=1;
      $suma=0;


      while ($a<=100){
      if (($a%2)==1){

      $suma=$suma+$a;
      }
      $a++;
      }

      ?>
      <h2>Cargando Suma:<?php echo$suma ?></h2>
    </div>

  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
