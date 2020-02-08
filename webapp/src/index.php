<?php
session_set_cookie_params(3600 * 72, "/");
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
  'logout' => array(
    'controller' => 'Next',
    'action' => 'logout'
  ),
  'desktop' => array(
    'controller' => 'Next',
    'action' => 'desktop'
  ),
  'mobile' => array(
    'controller' => 'Next',
    'action' => 'mobile'
  ),
  'arscene' => array(
    'controller' => 'Next',
    'action' => 'arscene'
  ),
  'faq' => array(
    'controller' => 'Next',
    'action' => 'faq'
  )
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
