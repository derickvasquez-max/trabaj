<?php
$titulo = "Actividad 4: Precio por producto y calidad";
include "cabecera.php";

$calidad = "";
$producto = "";
$precio = "";

if (isset($_POST['calidad'])) {
    $calidad = (int) $_POST['calidad'];
    $producto = (int) $_POST['producto'];

    // Tabla de precios: [producto][calidad]
    $tabla = [
        1 => [1 => 5000, 2 => 4500, 3 => 4000],
        2 => [1 => 4500, 2 => 4000, 3 => 3500],
        3 => [1 => 4000, 2 => 3500, 3 => 3000],
    ];

    $precio = $tabla[$producto][$calidad] ?? "Use valores del 1 al 3";
}
?>
<form method="post">
    <div class="mb-2">
        <label class="form-label">Calidad</label>
        <input type="number" min="1" max="3" class="form-control" name="calidad" value="<?= $calidad ?>" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Producto</label>
        <input type="number" min="1" max="3" class="form-control" name="producto" value="<?= $producto ?>" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Precio</label>
        <input type="text" class="form-control bg-secondary-subtle" value="<?= $precio ?>" readonly>
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-2">Calcular</button>
</form>
<?php include "pie.php"; ?>
