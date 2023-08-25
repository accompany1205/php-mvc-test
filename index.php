<?php
require_once 'app/controllers/PageController.php';
require_once 'route.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';

$controllerName = 'PageController';
$methodName = 'index';

if (array_key_exists($url, $routes)) {
    $methodName = $routes[$url];
}

$controller = new $controllerName();
if (method_exists($controller, $methodName)) {
    $controller->$methodName();
} else {
    echo '404 - Page not found';
}
