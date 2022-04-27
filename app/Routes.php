<?php

namespace App;

use Core\Router;

class Routes extends Router
{
    protected function initRoutes()
    {
        $routes['home'] = [
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        ];

        $routes['about'] = [
            'route' => '/sobre',
            'controller' => 'AboutController',
            'action' => 'index'
        ];

        $this->setRoutes($routes);
    }
}
