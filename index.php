<!doctype html>
<html lang="es">
<?php
include "config/config.php";
include "includes/head.php";
?>

<body class="d-flex flex-column min-vh-100 bg-light">
<?php include "includes/navbar.php"; ?>

<?php
// Definir ruta limpia
if (QUERY_STRING_START === false) {
  $route = REQUEST_URI;
} else {
  $route = substr(REQUEST_URI, 0, QUERY_STRING_START);
}

// Obtener solo el nombre del archivo sin extensión
$route = $_GET['page'] ?? 'index';

switch ($route) {
  case 'index':
    include "pages/index_content.php";
    break;
  case 'about':
    include "pages/about.php";
    break;
  case 'contacto':
    include "pages/contacto.php";
    break;
  default:
    include "404.html";
    break;
}
?>
<?php include "includes/footer.php"; ?>
</body>
</html>
