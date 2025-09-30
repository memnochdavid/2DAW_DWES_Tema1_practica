<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Desarrollo Web en Entorno Servidor T1</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkFh1Gf5j7fakHf8ZcldONk7r8aG5nZ3I8I5FzW1F6M2y5E5P5c5Zg" crossorigin="anonymous">

  <!-- Tu CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <meta name="description" content="">
</head>

<body class="bg-light">
<?php
require_once "config/config.php";
include "includes/header.php";
include "includes/navbar.php";
?>

<div class="container mt-5 bg-light">
  <h1 class="text-center mb-4">Ejercicios Tema 1 - Desarrollo web en entorno servidor</h1>

  <div class="container mt-5 bg-blue" id="ej01">
    <h1 class="text-center mb-4">
      <a class="text-decoration-none text-dark" data-bs-toggle="collapse" href="#contenido" role="button" aria-expanded="false" aria-controls="contenido">
        <h2 class="text-left">Ejercicio 1</h2>
      </a>
    </h1>
    <div class="collapse <?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo "show"; ?>" id="contenido">
      <?php include "includes/ejercicio01.php"; ?>
    </div>
  </div>

  <div class="container mt-5 bg-blue" id="ej02">
    <h1 class="text-center mb-4">
      <a class="text-decoration-none text-dark" data-bs-toggle="collapse" href="#contenido" role="button" aria-expanded="false" aria-controls="contenido">
        <h2 class="text-left">Ejercicio 2</h2>
      </a>
    </h1>
    <div class="collapse <?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo "show"; ?>" id="contenido">
      <?php include "includes/ejercicio02.php"; ?>
    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>

<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
