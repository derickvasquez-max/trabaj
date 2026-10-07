<?php
$titulo = "Guía 9: resultado";
include "cabecera.php";
?>
<div class="alert alert-success">
<?php
  echo htmlspecialchars($_REQUEST['nombre']);
  echo "<br>";
  if ($_REQUEST['edad'] >= 18) {
    echo "Es mayor de edad";
  } else {
    echo "No es mayor de edad";
  }
?>
</div>
<a href="guia_09_formulario_edad.php" class="btn btn-outline-primary btn-sm">Volver</a>
<?php include "pie.php"; ?>
