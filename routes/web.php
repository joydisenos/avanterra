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

Route::get('/', 'SiteController@index')->name('index');
Route::get('/home', 'SiteController@index')->name('home');


Route::prefix('comercial')->middleware('role:admin|comercial')->group(function (){
   // Comercial
    Route::get('/', 'SiteController@comercial')->name('comercial');
    Route::get('/crear', 'SiteController@comercialCrear')->name('comercial.crear');
    Route::get('/editar/{id}', 'SiteController@comercialEditar')->name('comercial.editar');
    Route::post('/crear', 'SiteController@comercialCargar')->name('comercial.cargar');
    Route::post('/actualizar/{id}', 'SiteController@comercialActualizar')->name('comercial.actualizar');
 });
 Route::prefix('financiero')->middleware('role:admin|financiero')->group(function (){
   // Financiero
Route::get('/', 'SiteController@financiero')->name('financiero');
Route::get('/crear', 'SiteController@financieroCrear')->name('financiero.crear');
Route::get('/editar/{id}', 'SiteController@financieroEditar')->name('financiero.editar');
Route::post('/crear', 'SiteController@financieroCargar')->name('financiero.cargar');
Route::post('/actualizar/{id}', 'SiteController@financieroActualizar')->name('financiero.actualizar');
 });





Auth::routes();


