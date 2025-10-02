<footer class="bg-dark text-white text-center py-3 mt-auto">
  <div class="container">
    <p class="mb-0">
      <?php
      setlocale(LC_TIME, "es_ES.UTF-8");
      echo strftime("%A, %d de %B de %Y %H:%M:%S");
      ?>
      <br>&copy; <?php echo AUTOR; ?>. Todos los derechos reservados.
    </p>
  </div>

  <script src="<?php echo BASE_URL ?>/assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</footer>
