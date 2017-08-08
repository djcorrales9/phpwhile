<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title>.</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
       <h2>Algoritmo que imprima la suma de todos los numeros páres que van de 1 al 100, y diga cuantos hay.</h2>

       <?php

         $a=1;
         $b=0;
        while ($a <= 100) {
             if (($a%2)==0) {
                echo "&nbsp",$a++;
                $b++;
             }
             $a++;
        }

        ?>

<h3>los numeros pares que hay del 1 al 100 son: <?php echo "$b"; ?></h3>

    </div>

  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
