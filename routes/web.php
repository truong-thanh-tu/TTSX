<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[
    'as'=>'Display',
    'uses'=>'controllerStaff@index'
]);
Route::get('Add_show',[
    'as'=>'Add_show',
    'uses'=>'controllerStaff@show'
]);
Route::post('Search',[
    'as'=>'Search',
    'uses'=>'controllerStaff@store',
]);
Route::post('Add',[
    'as'=>'Add',
    'uses'=>'controllerStaff@create',
]);
Route::get('Edit/{id}', [
    'as'=>'Edit',
    'uses'=>'controllerStaff@edit'
]);
Route::post('Update/{id}',[
    'as'=>'Update',
    'uses'=>'controllerStaff@update'
]);

Route::delete('Delete/{id}', [
    'as'=>'Delete',
    'uses'=>'controllerStaff@destroy'
]);
