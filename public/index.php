<?php
session_start();
require_once "../vendor/autoload.php";
require_once "../app/Routes.php";

$router->run($router->routes);
