<?php

//use Illuminate\Http\Response;

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

$router->get('currencies/{id}', 'CurrencyController@show');
$router->get('currencies/', 'CurrencyController@index');
$router->get('/', 'CurrencyController@index');
