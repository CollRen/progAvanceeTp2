<?php
use App\Controllers;
use App\Routes\Route;

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@home');




Route::get('/recettehasingredient', 'RecettehasingredientController@index');
Route::get('/recettehasingredient/show', 'RecettehasingredientController@show');

Route::get('/recettehasingredient/create', 'RecettehasingredientController@create');
Route::post('/recettehasingredient/create', 'RecettehasingredientController@store');

Route::get('/recettehasingredient/edit', 'RecettehasingredientController@edit');
Route::post('/recettehasingredient/edit', 'RecettehasingredientController@update');
Route::post('/recettehasingredient/delete', 'RecettehasingredientController@delete');


Route::dispatch();
?>

