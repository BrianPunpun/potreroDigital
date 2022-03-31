<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>BackEnd TP 1</title>
</head>

<body>
  <h1>Ejercicio 1</h1>
  <?php
    echo "Hola mundo";
   ?>
  <hr>
  <h1>Ejercicio 2</h1>
  <?php
     $Saludo="Hola mundo";
     echo $Saludo;
    ?>
  <hr>
  <h1>Ejercicio 3</h1>
  <p>Las Variables son: 12 y 6</p>
  <h2>Suma</h2>
  <?php
      $numero1=12;
      $numero2=6;
      echo $numero1 + $numero2;
    ?>
  <h2>Resta</h2>
  <?php
       $numero1=12;
       $numero2=6;
       echo $numero1 - $numero2;
    ?>
  <h2>Multiplicación</h2>
  <?php
        $numero1=12;
        $numero2=6;
        echo $numero1 * $numero2;
    ?>
  <h2>División Entera</h2>
  <?php
         $numero1=12;
         $numero2=6;
         echo $numero1 / $numero2;
    ?>
  <h2>Resto de División</h2>
  <?php
          $numero1=12;
          $numero2=6;
          echo $numero1 % $numero2;
    ?>
  <hr>
  <h1>Ejercicio 4</h1>
  <?php
$celsius=20;
$numero2=1.8;
$numero3=32;
echo $celsius * $numero2 + $numero3;
   ?>
  <hr>
  <h1>Ejercicio 5</h1>
  <h2>A1)</h2>
  <?php
$base = 18;
$altura = 12;
echo $perimetro = 2 * $base + 2* $altura;
    ?>
    <h2>A2)</h2>
  <?php
$base = 18;
$altura = 12;
echo $area = $base * $altura;
    ?>
<hr>
<p>B1)</p>
  <?php
 $radio = 30;
 $pi = 3.1416;
 $a = ($pi * ($radio * $radio));
 echo "El area es $a"
     ?>
    <p>B2)</p>
<?php
$radio = 30;
$pi = 3.1416;
$b = $pi * $radio;
echo "El perimetro es $b"
 ?>

</body>

</html>
