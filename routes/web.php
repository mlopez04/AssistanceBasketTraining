<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'namespace' => 'Admin'], function()
 {
   CRUD::resource('club', 'ClubCrudController');
   CRUD::resource('season', 'SeasonCrudController');
   CRUD::resource('category', 'CategoryCrudController');
   CRUD::resource('team', 'TeamCrudController');
 });