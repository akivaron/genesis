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

$router->group(['prefix'=>'api/v1'], function() use($router){
  // User
  $router->get('/user', 'Api\V1\UserController@index');
  $router->post('/user', 'Api\V1\UserController@create');
  $router->get('/user/{id}', 'Api\V1\UserController@show');
  $router->put('/user/{id}', 'Api\V1\UserController@update');
  $router->delete('/user/{id}', 'Api\V1\UserController@destroy');

  // Tabungan
  $router->get('/tabungan', 'Api\V1\TabunganController@index');
  $router->post('/tabungan', 'Api\V1\TabunganController@create');
  $router->get('/tabungan/{id}', 'Api\V1\TabunganController@show');
  $router->put('/tabungan/{id}', 'Api\V1\TabunganController@update');
  $router->delete('/tabungan/{id}', 'Api\V1\TabunganController@destroy');

  // Withdraw
  $router->get('/withdraw', 'Api\V1\WithdrawController@index');
  $router->post('/withdraw', 'Api\V1\WithdrawController@create');
  $router->get('/withdraw/{id}', 'Api\V1\WithdrawController@show');
  $router->put('/withdraw/{id}', 'Api\V1\WithdrawController@update');
  $router->delete('/withdraw/{id}', 'Api\V1\WithdrawController@destroy');

  // Bunga
  $router->get('/bunga', 'Api\V1\BungaController@index');
  $router->post('/bunga', 'Api\V1\BungaController@create');
  $router->get('/bunga/{id}', 'Api\V1\BungaController@show');
  $router->put('/bunga/{id}', 'Api\V1\BungaController@update');
  $router->delete('/bunga/{id}', 'Api\V1\BungaController@destroy');
});
