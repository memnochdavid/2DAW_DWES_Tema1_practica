<?php
include "../config/config.php";
include "../includes/head.php";
include "../includes/navbar.php";
?>

<main class="container d-flex flex-column justify-content-center align-items-center flex-fill mt-5">
  <div class="card shadow p-4 w-100" style="max-width: 700px;">
    <h1 class="text-center mb-4">Acerca de mí</h1>
    <p class="lead text-center">
      Soy <strong><?php echo AUTOR; ?></strong>, estudiante de <strong>2º de Desarrollo de Aplicaciones Web</strong> en <em>Escuela Arte Granada</em>.
    </p>
  </div>
</main>

<?php include "../includes/footer.php"; ?>
