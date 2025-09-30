<?php
// Inicializar variables
$nombre = $edad = $ciudad = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"] ?? "";
  $edad   = $_POST["edad"] ?? "";
  $ciudad = $_POST["ciudad"] ?? "";
}

?>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Formulario - Uso de variables</h2>
  <form method="POST" action="">
    <!-- nombre -->
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>

    <!-- edad-->
    <div class="mb-3">
      <label for="edad" class="form-label">Edad</label>
      <input type="number" class="form-control" id="edad" name="edad" min="0" required>
    </div>

    <!-- ciuad -->
    <div class="mb-3">
      <label for="ciudad" class="form-label">Ciudad</label>
      <input type="text" class="form-control" id="ciudad" name="ciudad" required>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="alert alert-success mt-4">
      <p><strong>Datos recibidos:</strong></p>
      <p>Nombre: <?= htmlspecialchars($nombre) ?></p>
      <p>Edad: <?= htmlspecialchars($edad) ?></p>
      <p>Ciudad: <?= htmlspecialchars($ciudad) ?></p>
    </div>
  <?php endif; ?>
</div>
