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

Route::get("/get-user-form", "UserController@getAddUserForm");
Route::post('/insert', ['as' => 'insert', 'uses' => 'UserController@insertAction']);
Route::get("/showAll", "UserController@showAllAction");
Route::get("/showAction/{id}", "UserController@showAction")->name('edit.user');
Route::post("/update/{id}", "UserController@updateAction")->name('user.update');