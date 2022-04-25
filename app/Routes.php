<?php

namespace App;

use MF\Init\Router;

class Routes extends Router
{
    protected function initRoutes()
    {
        $routes['home'] = [
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        ];

        $routes['about'] = [
            'route' => '/sobre',
            'controller' => 'indexController',
            'action' => 'about'
        ];

        $this->setRoutes($routes);
    }
}
