<?php
$titulo = "Guía 8: formulario (nombre)";
include "cabecera.php";
?>
<form method="post" action="guia_08_proceso.php">
    <label class="form-label">Ingrese su nombre:</label>
    <input type="text" class="form-control mb-3" name="nombre">
    <input type="submit" class="btn btn-primary" value="confirmar">
</form>
<?php include "pie.php"; ?>
