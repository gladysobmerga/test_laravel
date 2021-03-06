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

Auth::routes();

// Route::post('login', 'LoginController@authenticate')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

Route::get('/invalid', function () {
    return view('auth.invalid');
});

Route::get('/mailable', function () {
    $user = App\User::find(1);

    return new App\Mail\VerifyEmail($user);
});