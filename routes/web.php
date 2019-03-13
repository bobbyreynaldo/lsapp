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

Route::get('/',  'PagesController@index');
Route::get('/about',  'PagesController@about');
Route::get('/services',  'PagesController@services');

Route::resource('post', 'PostsController');

/*
pages.about artinya folder pages => file about.blade.html
>>
Route::get('/about', function () {
    return view('pages.about');
});

passing 2 variable
>>
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'this is user id: '.$id.' with name: '.$name;
});

*/
