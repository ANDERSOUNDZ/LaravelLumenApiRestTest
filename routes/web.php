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

$router->get('/key', function (){
    //Creando nuestra propia KEY para la coneccion de la base de datos para el archivoo
    // .en, generara una nueva key de la base
    return str_random(32);
});

$router->get('/user', function (){
    return 'vista de usuario';  
});

//llamando a controlador , la clausula 'uses' se debe utulizar para utilizar el controlador
$router->get('/users', ['uses'=>'UserController@metodousuarios']);