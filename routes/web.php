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

Route::get('/', function () {   /*Route(class)::get()(Method)*/
    return view('welcome');  /*if path '/' then return view called 'welcome' in 'resources/views/welcome.blade.php'*/
});

Route::get('/pizzas', 'PizzaController@index')->name('pizza.index')->middleware('auth');   /*Route(class)::get()(Method)*/
Route::get('/pizzas/create', 'PizzaController@create')->name('pizza.create');
Route::post('/pizzas', 'PizzaController@store')->name('pizza.store');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizza.show')->middleware('auth'); /*using Controller which called 'PizzaController.php' with function called 'show' */
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizza.destroy')->middleware('auth');  /*add this method to prevent non login user to view this route*/
  

Auth::routes();

/* Auth::routes([
    'register' => false
]);*/ //This type of Auth to prevent user from registering

Route::get('/home', 'HomeController@index')->name('home');
