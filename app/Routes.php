<?php

namespace App;

use Core\Router;

$router = new Router();

$router->get('/sobre', 'AboutController@index');
$router->get('/','HomeController@index');
