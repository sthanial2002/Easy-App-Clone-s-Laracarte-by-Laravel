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

Route::get('/',[
    'as'=> 'root_path',
    'uses'=>'PagesController@home'
]);

Route::get('/about',[
    'as'=> 'root_about',
    'uses'=>'PagesController@about'
]);

Route::get('/artisans',[
    'as'=> 'root_artisans',
    'uses'=>'PagesController@artisans'
]);

Route::get('/contact',[
    'as'=> 'root_contact',
    'uses'=>'PagesController@contact'
]);

