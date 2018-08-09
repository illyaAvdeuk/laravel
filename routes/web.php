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


Route::get('/page', function () {
    return view('page');
});

Route::get('/check', function (){echo '<pre>'; print_r($_ENV); echo '</pre>';});

//Route::post('/comments', function(){
//		echo '<pre>';print_r($_POST);echo '</pre>';
//});


//Route::match(['get', 'post'],'/comments', function(){
//		echo '<pre>';print_r($_POST);echo '</pre>';
//});

Route::any('/comments', function(){
		echo '<pre>';print_r($_POST);echo '</pre>';
});