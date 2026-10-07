<?php
$titulo = "Actividad 5: Positivos y negativos";
include "cabecera.php";

$ni = "";
$nf = "";
$mensaje = "";

if (isset($_POST['ni'])) {
    $ni = (int) $_POST['ni'];
    $nf = (int) $_POST['nf'];

    if ($ni > $nf) {
        $mensaje = "El número inicial no puede ser mayor que el final.";
    } else {
        // a) WHILE
        $pos_while = 0; $neg_while = 0;
        $i = $ni;
        while ($i <= $nf) {
            if ($i > 0) { $pos_while++; }
            if ($i < 0) { $neg_while++; }
            $i++;
        }

        // b) DO WHILE
        $pos_do = 0; $neg_do = 0;
        $i = $ni;
        do {
            if ($i > 0) { $pos_do++; }
            if ($i < 0) { $neg_do++; }
            $i++;
        } while ($i <= $nf);

        // c) FOR
        $pos_for = 0; $neg_for = 0;
        for ($i = $ni; $i <= $nf; $i++) {
            if ($i > 0) { $pos_for++; }
            if ($i < 0) { $neg_for++; }
        }
    }
}
?>
<form method="post">
    <div class="mb-2">
        <label class="form-label">Num. Inicial</label>
        <input type="number" class="form-control" name="ni" value="<?= $ni ?>" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Num. Final</label>
        <input type="number" class="form-control" name="nf" value="<?= $nf ?>" required>
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-2">Calcular</button>
</form>

<?php if ($mensaje != ""): ?>
    <div class="alert alert-danger mt-3 mb-0"><?= $mensaje ?></div>
<?php elseif (isset($pos_while)): ?>
    <table class="table table-bordered text-center mt-3 mb-0">
        <tr class="table-primary"><th>Estructura</th><th>Positivos</th><th>Negativos</th></tr>
        <tr><td>While</td><td><?= $pos_while ?></td><td><?= $neg_while ?></td></tr>
        <tr><td>Do While</td><td><?= $pos_do ?></td><td><?= $neg_do ?></td></tr>
        <tr><td>For</td><td><?= $pos_for ?></td><td><?= $neg_for ?></td></tr>
    </table>
<?php endif; ?>
<?php include "pie.php"; ?>
