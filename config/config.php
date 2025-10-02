<?php
define("SITE_NAME", "Desarrollo Web en Entorno Servidor T1");
define("BASE_URL", "http://localhost:8000");
define("AUTOR", "David Duque Díaz");
define("URL_ACTUAL", 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
define("REQUEST_URI", $_SERVER['REQUEST_URI']);
define("QUERY_STRING_START", strpos($_SERVER['REQUEST_URI'], '?'));
?>
