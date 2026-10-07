<?php
$titulo = "Actividad 2: Tipo de clima";
include "cabecera.php";

$temperatura = "";
$clima = "";

if (isset($_POST['temperatura'])) {
    $temperatura = (float) $_POST['temperatura'];

    if ($temperatura < 10) {
        $clima = "FRÍO";
    } elseif ($temperatura <= 20) {
        $clima = "NUBLADO";
    } elseif ($temperatura <= 30) {
        $clima = "CALOR";
    } else {
        $clima = "TROPICAL";
    }
}
?>
<form method="post">
    <div class="mb-2">
        <label class="form-label">Temperatura</label>
        <input type="number" step="0.1" class="form-control" name="temperatura" value="<?= $temperatura ?>" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Clima</label>
        <input type="text" class="form-control bg-secondary-subtle" value="<?= $clima ?>" readonly>
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-2">Calcular</button>
</form>
<?php include "pie.php"; ?>
