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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/formulario2', 'RegistroUserController@index')->name('formulario2');
Route::post('formulario2', 'RegistroUserController@store');

Route::get('/validarcedula', 'ValidarCedulaController@index')->name('validarcedula');
Route::post('validarcedula', 'ValidarCedulaController@store');

Route::resource('persona', 'PersonaController');

Route::get('listaUsers', 'ListaUsersController@index')->name('listaUsers');
