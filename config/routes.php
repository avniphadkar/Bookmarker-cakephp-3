<?php

use Cake\Core\Plugin;
use Cake\Routing\Router;

Router::defaultRouteClass('Route');

Router::scope(
    '/bookmarks',
    ['controller' => 'Bookmarks'],
    function ($routes) {
        $routes->connect('/tagged/*', ['action' => 'tags']);
    }
);

Router::scope('/', function ($routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks('InflectedRoute');
});

Plugin::routes();
