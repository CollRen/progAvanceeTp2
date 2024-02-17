<?php
use App\Controllers;
use App\Routes\Route;

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');


/**
 * Route SHOW RECETTE
 */
Route::get('/recette', 'RecetteController@index');
Route::get('/recette/show', 'RecetteController@show');

/**
 * ROUTE RECETTE controller
 */
Route::get('/recette/create', 'RecetteController@create');
Route::post('/recette/create', 'RecetteController@store');
Route::get('/recette/edit', 'RecetteController@edit');
Route::post('/recette/edit', 'RecetteController@update');
Route::post('/recette/delete', 'RecetteController@delete');






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

