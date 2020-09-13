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
Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/e-book', 'EbookController@index')->name('eBook.index');
    Route::get('/demo', 'EbookController@demo');
    Route::get('/Manager-list', 'ManagerListController@index')->name('Manager-list.index');
    Route::get('/login', 'UserController@index');
    route::get('/forget_password', 'ForgetpasswordController@forget')->name('forgetpassword.forget_password');
    route::post('/forget_password', 'ForgetpasswordController@password');
 



