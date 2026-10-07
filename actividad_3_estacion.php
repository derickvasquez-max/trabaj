<?php
$titulo = "Actividad 3: Estación del año";
include "cabecera.php";

$dia = "";
$mes = "";
$estacion = "";

if (isset($_POST['dia'])) {
    $dia = (int) $_POST['dia'];
    $mes = (int) $_POST['mes'];

    // Ejemplo: 21 de marzo = 321
    $fecha = $mes * 100 + $dia;

    if ($fecha >= 1221 || $fecha <= 320) {
        $estacion = "VERANO";
    } elseif ($fecha <= 621) {
        $estacion = "OTOÑO";
    } elseif ($fecha <= 922) {
        $estacion = "INVIERNO";
    } else {
        $estacion = "PRIMAVERA";
    }
}
?>
<form method="post">
    <div class="mb-2">
        <label class="form-label">Día</label>
        <input type="number" min="1" max="31" class="form-control" name="dia" value="<?= $dia ?>" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Mes</label>
        <input type="number" min="1" max="12" class="form-control" name="mes" value="<?= $mes ?>" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Estación</label>
        <input type="text" class="form-control bg-secondary-subtle" value="<?= $estacion ?>" readonly>
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-2">Calcular</button>
</form>
<?php include "pie.php"; ?>
