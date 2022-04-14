<?php
require __DIR__ . "/../init.php";

$pathInfo = $_SERVER['PATH_INFO'];

$routes = [
  '/index' => [
    'controller' => 'postsController',
    'method' => 'index'
  ],
  '/post' => [
    'controller' => 'postsController',
    'method' => 'show'
  ]
];

if (isset($routes[$pathInfo])) {
  $route = $routes[$pathInfo];
  $controller = $container->make($route['controller']);
  $method = $route['method'];
  $controller->$method();
}


/*
if ($pathInfo == "/index") {
  $postsController = $container->make("postsController");
  $postsController->index();
} elseif ($pathInfo == "/post") {
  $postsController = $container->make("postsController");
  $postsController->show();
}
*/
 ?>