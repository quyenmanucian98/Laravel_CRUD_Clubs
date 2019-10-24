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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('clubs')->group(function () {
    Route::get('/list', 'ClubController@showClubs')->name('clubs.list');
    Route::get('/formAdd', 'ClubController@formAdd')->name('clubs.formAdd');
    Route::post('/add', 'ClubController@add')->name('clubs.add');
    Route::get('/delete/{id}', 'ClubController@delete')->name('clubs.delete');
    Route::get('/edit/{id}', 'ClubController@edit')->name('clubs.edit');
    Route::post('/update/{id}', 'ClubController@update')->name('clubs.update');
});


