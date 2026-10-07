<?php
$titulo = "Guía 6: while";
include "cabecera.php";
?>
<div class="alert alert-info mb-0">
<?php
  $valor = rand(1, 100);
  $inicio = 1;
  while ($inicio <= $valor) {
    echo $inicio;
    echo "<br>";
    $inicio++;
  }
?>
</div>
<?php include "pie.php"; ?>
