<!doctype html>
<html class="no-js" lang="">

<?php
include "config/config.php";
?>

<body class="bg-light">
<?php
include "includes/header.php";
include "includes/navbar.php";
?>

<div class="container mt-5 bg-light">
  <h1 class="text-center mb-4">Ejercicios Tema 1 - Desarrollo web en entorno servidor</h1>

  <div class="container mt-5 bg-blue" id="ej01">
    <h1 class="text-center mb-4">
      <a class="text-decoration-none text-dark" data-bs-toggle="collapse" href="#contenido" role="button" aria-expanded="false" aria-controls="contenido">
        <h2 class="text-left">Ejercicio </h2>
      </a>
    </h1>
    <div class="collapse <?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo "show"; ?>" id="contenido">
      <?php include "includes/ejercicio01.php"; ?>
    </div>
  </div>

</div>

<?php include "includes/footer.php"; ?>


</body>

</html>
