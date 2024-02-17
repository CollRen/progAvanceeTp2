<?php
use App\Controllers;
use App\Routes\Route;

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');


/**
 * Route SHOW CLIENT
 */
Route::get('/client', 'ClientController@index');
Route::get('/client/show', 'ClientController@show');

/**
 * ROUTE CLIENT controller
 */
Route::get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');
Route::get('/client/edit', 'ClientController@edit');
Route::post('/client/edit', 'ClientController@update');
Route::post('/client/delete', 'ClientController@delete');






/**
 * Route SHOW TESTER
 */
Route::get('/tester', 'TesterController@index');
Route::get('/tester/show', 'TesterController@show');

/**
 * ROUTE TESTER controller
 */
Route::get('/tester/create', 'TesterController@create');
Route::post('/tester/create', 'TesterController@store');
Route::get('/tester/edit', 'TesterController@edit');
Route::post('/tester/edit', 'TesterController@update');
Route::post('/tester/delete', 'TesterController@delete');



// dispatch //
Route::dispatch();
?>

