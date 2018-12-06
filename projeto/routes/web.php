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

Route::group(['middleware' => 'web'], function (){

    Route::get('/login_user', 'LoginController@user_login')->name('user.login');

    Route::post('/login_user', 'LoginController@user_logar')->name('user.logar');

    Route::get('/login_admin', 'LoginController@admin_login')->name('admin.login');

    Route::post('/login_admin', 'LoginController@admin_logar')->name('admin.logar');

    Route::get('/register', 'LoginController@user_register')->name('user.register');

    Route::post('/register', 'LoginController@user_register_store')->name('user.register.store');

    Route::get('/registeradm', 'LoginController@admin_register')->name('admin.register');

    Route::post('/registeradm', 'LoginController@admin_register_store')->name('admin.register.store');

    Route::post('/logout', 'LoginController@logout')->name('logout');

    Route::get('/', 'WelcomeController@index')->name('welcome.index');

    Route::get('/home','LoginController@home')->name('home');

    Route::get('/lista','ListaHoteisController@index')->name('lista');

    Route::get('/hotel', 'HotelController@index')->name('hotel');

    Route::get('/sobre','SobreController@index')->name('sobre');

    Route::get('/hotel-escolhido/{id}','HotelController@paginaHotel')->name('hotel.escolhido');

    Route::get('/mail', 'appControllerMail@index');

    Route::get('/primeiro', 'appControllerMail@enviarPrimeiroEmail');

    Route::post('/enviar', 'formatarController@enviarEmail')->name('enviar');

    Route::get('/hotel', 'HotelController@mostrar')->name('mostrar');


});

//Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin.index');

    Route::get('/hoteis', 'HotelController@index')->name('hoteis.index');
    Route::get('/hoteis/adicionar', 'HotelController@create')->name('hoteis.create');
    Route::post('/hoteis/adicionar', 'HotelController@store')->name('hoteis.store');
    Route::get('/hoteis/editar/{id}', 'HotelController@show')->name('hoteis.show');
    Route::put('/hoteis/editar/{id}', 'HotelController@update')->name('hoteis.update');
    Route::delete('/hoteis/delete', 'HotelController@destroy')->name('hoteis.destroy');

});

