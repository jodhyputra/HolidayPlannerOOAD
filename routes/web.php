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
    return view('pages.home');
});

Route::post('/logout', 'loginController@logout');

Route::get('/login','loginController@login');
Route::post('/login/process','loginController@loginProcess');

Route::get('/register','loginController@register');
Route::post('/register/process','loginController@registerProcess');

Route::get('/service', function () {
    return view('layouts.frontend.service');
});

Route::get('/about', function () {
    return view('layouts.frontend.about');
});


Route::get('/contact', function () {
    return view('layouts.frontend.contact');
});

Route::get('/tours', function () {
    return view('layouts.frontend.tours');
});


// Route::get('/komodo', function () {
//     return view('layouts.frontend.komodo');
// });

Route::get('/{tour}', 'TourController@show');

Route::get('/checkout', function () {
    return view('layouts.frontend.checkout');
});
