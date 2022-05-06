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

// Paginação do Laravel
Route::get('/', 'ClienteControlador@index');

// Paginação com JavaScript
Route::get('/indexJS', 'ClienteControlador@indexJS');
Route::get('/json ', 'ClienteControlador@indexJSON');

