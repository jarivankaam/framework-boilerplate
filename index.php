<?php

$routes = [
<<<<<<< HEAD
  '/' => '/public/views/index.php',
  '/about' => '/public/views/about.php',
  '/contact' => '/public/views/contact.php',
=======
  '/' => './public/views/index.php',
  '/about' => './public/views/about.php',
  '/contact' => './public/views/contact.php',
>>>>>>> 4b4e5f4623d240bd80dca66df9197b9f0fa49003
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($routes[$uri])) {
  require $routes[$uri];
} else {
  require '404.php'
}

