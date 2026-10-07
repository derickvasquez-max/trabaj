<?php
$titulo = "Guía 7: pares con for, while y do/while";
include "cabecera.php";
?>
<div class="alert alert-info mb-0">
<?php
  echo "Serie de números pares del 2 al 20 con el for";
  echo "<br>";
  for ($f = 2; $f <= 20; $f = $f + 2) {
    echo $f;
    echo "-";
  }
  echo "<br>";

  echo "Serie de números pares del 2 al 20 con el while";
  echo "<br>";
  $f = 2;
  while ($f <= 20) {
    echo $f;
    echo "-";
    $f = $f + 2;
  }
  echo "<br>";

  echo "Serie de números pares del 2 al 20 con el do/while";
  echo "<br>";
  $f = 2;
  do {
    echo $f;
    echo "-";
    $f = $f + 2;
  } while ($f <= 20);
?>
</div>
<?php include "pie.php"; ?>
