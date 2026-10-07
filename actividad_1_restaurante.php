<?php
$titulo = "Actividad 1: Restaurante";
include "cabecera.php";

$consumo = "";
$descuento = "";
$igv = "";
$pagar = "";

if (isset($_POST['consumo'])) {
    $consumo = (float) $_POST['consumo'];

    if ($consumo <= 100) {
        $descuento = $consumo * 0.10;   // 10% hasta S/.100
    } else {
        $descuento = $consumo * 0.20;   // 20% si es mayor
    }

    $igv = ($consumo - $descuento) * 0.19;
    $pagar = $consumo - $descuento + $igv;
}
?>
<form method="post">
    <div class="mb-2">
        <label class="form-label">Consumo</label>
        <input type="number" step="0.01" class="form-control" name="consumo" value="<?= $consumo ?>" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Monto descuento</label>
        <input type="text" class="form-control bg-secondary-subtle" value="<?= $descuento ?>" readonly>
    </div>
    <div class="mb-2">
        <label class="form-label">Impuesto IGV</label>
        <input type="text" class="form-control bg-secondary-subtle" value="<?= $igv ?>" readonly>
    </div>
    <div class="mb-2">
        <label class="form-label">Importe a pagar</label>
        <input type="text" class="form-control bg-secondary-subtle" value="<?= $pagar ?>" readonly>
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-2">Calcular</button>
</form>
<?php include "pie.php"; ?>
