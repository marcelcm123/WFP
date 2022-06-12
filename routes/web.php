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
    return view('welcome');
});

Route::get('catalog/{id}', function(){
    return view('welcome',['name' => 'Samantha']);
});
Route::get('catalog/{id}', function(){
    return view('welcome',['name' => 'Samantha']);
});

Route::resource('medicine','MedicineController');
Route::resource('category','CategoryController');

Route::post('/medicine/showInfo','MedicineController@showInfo')->name('showInfo');

Route::resource('transaction','TransactionController');

Route::resource('suppliers','SupplierController');

Route::post('supplier/getEditForm','SupplierController@getEditForm')->name('supplier.getEditForm');
Route::post('supplier/getEditForm2','SupplierController@getEditForm2')->name('supplier.getEditForm2');
Route::post('supplier/saveData','SupplierController@saveData')->name('supplier.saveData');
Route::post('supplier/deleteData','SupplierController@deleteData')->name('supplier.deleteData');

Route::get('/','MedicineController@front_index');
Route::get('cart','MedicineController@cart');
Route::get('add-to-cart/{id}','MedicineController@addToCart');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
