<?php

spl_autoload_register(function ($name){
    $path = explode('\\', $name);
    $path = implode('/', $path);
    $path = $path . '.php';
    require_once $path;
});


$route = new \system\Router();
$route = $route->getRoute();

$view =new system\View();
$view->controller = $route['controller'];
$view->action = $route['action'];

$conname = $route['controller'];
$actname = $route['action'];

$conname = 'app\\controller\\'. $conname;

$actname = $actname . 'Action';

$controller = new $conname();
$controller->view = $view;

$controller->params = $route['params'];

$controller->{$actname}();

system\Adab::get();

$view->renderLayout();

