<?php
$titulo = "Guía 4: switch (día de la semana)";
include "cabecera.php";
?>
<div class="alert alert-info mb-0">
<?php
  $dia = 4;
  switch ($dia) {
    case 1:
      echo "Hoy es Lunes"; break;
    case 2:
      echo "Hoy es Martes"; break;
    case 3:
      echo "Hoy es Miércoles"; break;
    case 4:
      echo "Hoy es Jueves"; break;
    case 5:
      echo "Hoy es Viernes"; break;
    case 6:
      echo "Hoy es Sábado"; break;
    case 7:
      echo "Hoy es Domingo"; break;
    default:
      echo "El número de día no corresponde";
  }
?>
</div>
<?php include "pie.php"; ?>
