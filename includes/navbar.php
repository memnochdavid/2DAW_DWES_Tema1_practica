<?php
include "config/config.php";
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url ?>">
      <img src="../assets/img/logo.png" alt="loogo" height="80" class="d-inline-block align-text-top">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url ?>/pages/about.php">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url ?>/pages/contact.php">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
