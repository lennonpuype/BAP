<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
  'next' => array(
    'controller' => 'Next',
    'action' => 'index'
  ),
  'routes' => array(
    'controller' => 'Next',
    'action' => 'routes'
  ),
  'route' => array(
    'controller' => 'Next',
    'action' => 'route'
  ),
  'ar' => array(
    'controller' => 'Next',
    'action' => 'ar'
  ),

);

if(empty($_GET['page'])) {
  $_GET['page'] = 'next';
}

if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
