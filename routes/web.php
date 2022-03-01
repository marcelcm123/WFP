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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("foo", function() {
//     return "Hello World";
// });

// Route::get('user/{name?}', function($name = 'John') {
//     return $name;
// });

// Route::get('greeting', function(){
//     return view('welcome',['name' => 'Samantha']);
// });
Route::get('/', function(){
    return view('mystore');
});

Route::get('catalog/{id}', function(){
    return view('welcome',['name' => 'Samantha']);
});
Route::get('catalog/{id}', function(){
    return view('welcome',['name' => 'Samantha']);
});

