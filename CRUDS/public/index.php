<?php
require_once '../app/config/global.php';
require_once '../app/controllers/AprendicesController.php';
require_once '../app/controllers/EventosController.php';
require_once '../app/controllers/ProyectoController.php';
require_once '../app/controllers/TipoAsesoriaController.php';
require_once '../app/controllers/AsesoriaController.php';
require_once '../app/controllers/PersonalTenicoController.php';
require_once '../app/controllers/ReunionController.php';

$url = $_SERVER['REQUEST_URI']; //Lo que se ingresa en la URL
$routes = include_once '../app/config/routes.php';

$matchedRoute = null;
foreach ($routes as $route => $routeConfig) {
    if(preg_match("#^$route$#", $url, $matches)) {
        $matchedRoute = $routeConfig;
        break;
    }
    // Las expresiones regulares encuentra un patrón en un String
}
if($matchedRoute){
    $controllerName = $matchedRoute['controller'];
    $actionName = $matchedRoute['action'];
    if(class_exists($controllerName) && method_exists($controllerName, $actionName)){
        $parameters = array_slice($matches, 1);
        $controller = new $controllerName();
        $controller->$actionName(...$parameters);
        exit;
    }
}
