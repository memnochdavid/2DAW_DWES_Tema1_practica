<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo BASE_URL; ?>/index.php">
      <img src="<?php echo BASE_URL; ?>/assets/img/logo.png" alt="logo" height="50"
           class="d-inline-block align-text-top">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?php if (str_contains($_GET['page'], 'index')) echo 'active'; ?>" href="<?php echo BASE_URL; ?>/index.php?page=index">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if (str_contains($_GET['page'], 'about')) echo 'active'; ?>" href="<?php echo BASE_URL; ?>/index.php?page=about">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if (str_contains($_GET['page'], 'contacto')) echo 'active'; ?>" href="<?php echo BASE_URL; ?>/index.php?page=contacto">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
