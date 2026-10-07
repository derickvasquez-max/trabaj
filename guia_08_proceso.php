<?php
$titulo = "Guía 8: resultado";
include "cabecera.php";
?>
<div class="alert alert-success">
<?php
  echo "El nombre ingresado es: ";
  echo htmlspecialchars($_REQUEST['nombre']);
?>
</div>
<a href="guia_08_formulario_nombre.php" class="btn btn-outline-primary btn-sm">Volver</a>
<?php include "pie.php"; ?>
