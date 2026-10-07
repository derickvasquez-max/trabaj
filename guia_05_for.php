<?php
$titulo = "Guía 5: for (1 al 100)";
include "cabecera.php";
?>
<div class="alert alert-info mb-0">
<?php
  for ($f = 1; $f <= 100; $f++) {
    echo $f;
    echo "<br>";
  }
?>
</div>
<?php include "pie.php"; ?>
