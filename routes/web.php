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

Route::get('/','PagesController@index');

Route::get('/home', 'PagesController@index');

Route::get('/contact', 'PagesController@contact');

Route::get('/registry','PagesController@registry');

Route::get('/login', 'PagesController@login');

Route::get('/info', 'PagesController@info');

//Route::get('/list', 'PagesController@list');

Route::get('/autos', 'AutoController@index');

Auth::routes();

Route::get('/logout', function ()
{
    Auth::logout();
    return redirect('/');
});

Route::auth();