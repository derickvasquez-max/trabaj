<?php
$titulo = "Guía 9: formulario (nombre y edad)";
include "cabecera.php";
?>
<form method="post" action="guia_09_proceso.php">
    <label class="form-label">Ingrese el nombre:</label>
    <input type="text" class="form-control mb-3" name="nombre">
    <label class="form-label">Ingrese la edad:</label>
    <input type="text" class="form-control mb-3" name="edad">
    <input type="submit" class="btn btn-primary" value="confirmar">
</form>
<?php include "pie.php"; ?>
