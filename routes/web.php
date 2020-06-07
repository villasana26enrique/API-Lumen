<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// API route group
$router->group(['prefix' => 'api'], function () use ($router) {
    // Ruta: /api/key
    $router->get('key', 'KeyController@generateKey');
    // Ruta: /api/test
    $router->get('test', 'TestController@testGet');
    // Ruta: /api/test
    $router->post('test', 'TestController@testPost');
    // Ruta: /api/test/{ id }
    $router->put('test/{ id }', 'TestController@testUpdate'); 
});