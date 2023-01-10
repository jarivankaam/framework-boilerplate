<?php

$routes = [
  '/' => './private/views/index.php',
  '/about' => './private/views/about.php',
  '/contact' => './private/views/contact.php',
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($routes[$uri])) {
  require $routes[$uri];
} else {
  require '404.html'
}

