<?php

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

$router->get('/key',function(){
    return \Illuminate\Support\Str::random(32);
});

$router->get('/user','AccountController@index');
$router->get('/event','EventController@index');
$router->get('/artikel','ArtikelController@index');
$router->post('/artikel','ArtikelController@store');
$router->get('/user/{id}','AccountController@show');
