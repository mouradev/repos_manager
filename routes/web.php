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
})->middleware(['auth'])->name('/');

Route::get('/usuarios', 'UserController@index')->middleware(['auth'])->name('usuarios');
Route::group(['prefix' => 'usuario', 'middleware' => ['auth']], function () {
    Route::get('/', function() {
        return redirect()->route('usuarios');
    });
    Route::get('/add', 'UserController@create')->name('add-usuario');
    Route::get('/{$id}', 'UserController@show')->name('usuario');
    Route::get('/{$id}/edit', 'UserController@edit')->name('edit-usuario');
});

Route::get('/repositorios', 'RepositoryController@index')->middleware(['auth'])->name('repositorios');
Route::group(['prefix' => 'repositorio', 'middleware' => ['auth']], function () {
    Route::get('/', function() {
        return redirect()->route('repositorios');
    });
    Route::get('/add', 'RepositoryController@create')->name('add-repositorio');
    Route::get('/{$id}', 'RepositoryController@show')->name('repositorio');
    Route::get('/{$id}/edit', 'RepositoryController@edit')->name('edit-repositorio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'action', 'middleware' => 'auth'], function() {
    Route::post('/repository/store', 'RepositoryController@store')->name('repository@store');
    Route::post('/repository/update', 'RepositoryController@update')->name('repository@update');
    Route::post('/repository/destroy', 'RepositoryController@destroy')->name('repository@destroy');

    Route::post('/user/store', 'UserController@store')->name('user@store');
    Route::post('/user/update', 'UserController@update')->name('user@update');
    Route::post('/user/destroy', 'UserController@destroy')->name('user@destroy');
});