<?php


use Cake\Core\Plugin;
use Cake\Routing\Router;


Router::defaultRouteClass('Route');

// /bookmarks/tagged/*
Router::scope(
    '/bookmarks',
    ['controller' => 'Bookmarks'],
    function ($routes) {
        $routes->connect('/tagged/*', ['action' => 'tags']);
    }
);


Router::scope('/', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
