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

//Route::group([
	//'middleware'=>'auth'],
	//function(){
Route::resource('/admin','AdminController');
	//});

Auth::routes();

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/posts', 'HomeController@posts')->name('posts');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/suscripcion', 'HomeController@suscripcion')->name('suscripcion');

Route::get('/suscribir', 'UserController@suscribir')->name('suscribir');

Route::get('/posts/todos', 'PostController@postsAdmin')->name('todos');

Route::resource('/posts','PostController');

Route::get('/users/todosu', 'UserController@todousers')->name('todosu');

Route::resource('/users','UserController');




