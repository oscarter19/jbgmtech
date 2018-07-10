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
    return view('indice');
});
Route::get('about', function () {
    return view('about');
});
Route::get('fresche', function () {
    return view('fresche');
});
Route::get('contact', function () {
    return view('contact');
});
Route::post('/mail',['uses'=>'MailController@store','as'=>'mail.store']);
Route::resource('mail','MailController');
Route::get('quicksoft', function () {
    return view('quicksoft');
});
Route::get('valery', function () {
    return view('valery');
});
Route::get('green', function () {
    return view('green');
});
Route::get('revsoft', function () {
    return view('revsoft');
});
Route::get('services', function () {
    return view('services');
});
Route::get('revSche', function () {
    return view('revSche');
});
Route::get('revDataF', function () {
    return view('revDataF');
});
Route::get('revMessage', function () {
    return view('revMessage');
});
Route::get('revView', function () {
    return view('revView');
});
Route::get('revGuard', function () {
    return view('revGuard');
});
