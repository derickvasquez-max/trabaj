<?php
$titulo = "Guía 3: uno, dos, tres";
include "cabecera.php";
?>
<div class="alert alert-info mb-0">
<?php
  $num = rand(1, 3);
  if ($num == 1) {
    echo "uno";
  } else {
    if ($num == 2) {
      echo "dos";
    } else {
      echo "tres";
    }
  }
?>
</div>
<?php include "pie.php"; ?>
