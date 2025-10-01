<?php include "../config/config.php"; ?>
<footer class="bg-dark text-white text-center py-3 mt-5">
  <div class="container">
    <p class="mb-0">
      <?php date_default_timezone_set("Europe/Madrid");
      echo date("D, d M Y H:i:s");
      ?> <br>&copy;
      <?php echo autor; ?>. Todos los derechos reservados, así que no te pases.
    </p>
  </div>
</footer>
