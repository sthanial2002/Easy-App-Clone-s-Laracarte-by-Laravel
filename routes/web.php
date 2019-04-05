<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| c

uontains the "web" middleware group. Now create something great!
|

*/


Route::get('/',[
    'as'=> 'root_path',
    'uses'=>'PagesController@home'
]);

Route::get('/about',[
    'as'=> 'about_path',
    'uses'=>'PagesController@about'
]);

Route::get('/artisans',[
    'as'=> 'artisans_path',
    'uses'=>'PagesController@artisans'
]);

Auth::routes();

Route::get('/contact',[
    'as'=> 'contact.create',
    'uses'=>'ContactController@create'
])->middleware('auth');

Route::post('/contact',[
    'as'=> 'contact.store',
    'uses'=>'ContactController@store'
]);



