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

Route::group(['middleware' => 'cors'], function(Router $router){
    $router->get('product', 'ProductsController'); // <- your route here
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('product','ProductsController')->name('product');

Route::get('single-product', function () {
    return view('single-product');
   
});

Route::get('contact', function () {
    return view('contact');
   
})->name('contact');

Route::get('about', function () {
    return view('about');

});

Route::post('mail','MailController')->name('mail');
//Route::resource('mail','Mail2');
//Route::resource('Mail2','MailController');


Auth::routes();
Route::get('logout', 'LoginController@logout');
Route::post('addtocart', 'ProductsController@addToCart');
Route::get('carrito','CartController');
