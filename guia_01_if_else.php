<?php
$titulo = "Guía 1: if / else";
include "cabecera.php";
?>
<div class="alert alert-info mb-0">
<?php
  $valor = rand(1, 10);
  echo "El valor sorteado es $valor<br>";
  if ($valor <= 5) {
    echo "Es menor o igual a 5";
  } else {
    echo "Es mayor a 5";
  }
?>
</div>
<?php include "pie.php"; ?>
