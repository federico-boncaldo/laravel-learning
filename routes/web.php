<?php

use App\Task;
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

Route::get('/', function(){
	return view('index');
});

Route::get('/posts', 'PostsController@index');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');