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
    return view('home');
})->middleware(['auth']);

Route::get('/usuarios', 'UserController@index')->middleware(['auth'])->name('usuarios');
Route::group(['prefix' => 'usuario', 'middleware' => ['auth']], function () {
    Route::get('/', function() {
        return redirect()->route('usuarios');
    });
    Route::get('/add', 'UserController@create')->name('add-usuario');
    Route::get('/{$id}', 'UserController@show')->name('usuario');
    Route::get('/{$id}/edit', 'UserController@edit')->name('edit-usuario');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
