<?php
use App\Controllers;
use App\Routes\Route;

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');




Route::get('/recette', 'RecetteController@index');
Route::get('/recette/show', 'RecetteController@show');

Route::get('/recette/create', 'RecetteController@create');
Route::post('/recette/create', 'RecetteController@store');

Route::get('/recette/edit', 'RecetteController@edit');
Route::post('/recette/edit', 'RecetteController@update');
Route::post('/recette/delete', 'RecetteController@delete');



Route::get('/auteur', 'AuteurController@index');
Route::get('/auteur/show', 'AuteurController@show');

Route::get('/auteur/create', 'AuteurController@create');
Route::post('/auteur/create', 'AuteurController@store');

Route::get('/auteur/edit', 'AuteurController@edit');
Route::post('/auteur/edit', 'AuteurController@update');
Route::post('/auteur/delete', 'AuteurController@delete');



Route::get('/categorie', 'CategorieController@index');
Route::get('/categorie/show', 'CategorieController@show');

Route::get('/categorie/create', 'CategorieController@create');
Route::post('/categorie/create', 'CategorieController@store');

Route::get('/categorie/edit', 'CategorieController@edit');
Route::post('/categorie/edit', 'CategorieController@update');
Route::post('/categorie/delete', 'CategorieController@delete');





Route::get('/tester', 'TesterController@index');
Route::get('/tester/show', 'TesterController@show');

Route::get('/tester/create', 'TesterController@create');
Route::post('/tester/create', 'TesterController@store');

Route::get('/tester/edit', 'TesterController@edit');
Route::post('/tester/edit', 'TesterController@update');
Route::post('/tester/delete', 'TesterController@delete');



Route::dispatch();
?>

