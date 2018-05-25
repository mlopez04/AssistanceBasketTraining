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
    return Redirect::to('/admin/user');
});

Route::get('register', function () {
    return Redirect::to('/admin/user');
});

Route::post('register', function () {
    return Redirect::to('/admin/user');
});


Route::group(['prefix' => 'admin', 'middleware' => ['admin','can:categories-crud'], 'namespace' => 'Admin'], function()
 {
   CRUD::resource('category', 'CategoryCrudController');
 });

Route::group(['prefix' => 'admin', 'middleware' => ['admin','can:club-crud'], 'namespace' => 'Admin'], function()
{
    CRUD::resource('club', 'ClubCrudController');

});

Route::group(['prefix' => 'admin', 'middleware' => ['admin','can:season-crud'], 'namespace' => 'Admin'], function()
{
    CRUD::resource('season', 'SeasonCrudController');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'namespace' => 'Admin'], function()
{
    CRUD::resource('team', 'TeamCrudController');
});


Route::group(['prefix' => 'admin', 'middleware' => ['admin','can:permission-manager'], 'namespace' => 'Admin'], function()
{
    CRUD::resource('permission', '\Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController');
    CRUD::resource('role', '\Backpack\PermissionManager\app\Http\Controllers\RoleCrudController');
    CRUD::resource('user', '\Backpack\PermissionManager\app\Http\Controllers\UserCrudController');
});

