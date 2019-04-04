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

Route::get('/about', function () {
    return "this is my about page";
})->name("about");


Route::get('/task',"Taskmanagercontroller@index")->name("task.index");
Route::post('/task',"Taskmanagercontroller@store")->name("task.store");

Route::get('/task/create',"Taskmanagercontroller@create")->name("task.create");
Route::get('/task/edit/{taskid}',"Taskmanagercontroller@edit")->name("task.edit");
Route::put('/task/edit/{taskid}',"Taskmanagercontroller@update")->name("task.update");
Route::delete('/task/edit/{taskid}',"Taskmanagercontroller@destroy")->name("task.destroy");