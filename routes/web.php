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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/Reportes', function () {
    return view('Reportes');
})->name('reportes');

Route::get('pdf', 'ReportGeneratorController@ReporteCurriculum')->name('pdf');

Route::get('requisitos/offer/{id}', 'requisitosController@offer')->name('offer');
Route::get('experiencias/curriculum/{id}', 'experienciasController@curriculum')->name('exp');
Route::get('formaciones/curriculum/{id}', 'formacionesController@curriculum')->name('form');


Route::get('requisitos/create/{id}', 'requisitosController@create')->name('create');

Route::get('requisitos/show/{id}/{oferta}', [
    'as' => 'show', 'uses' => 'requisitosController@show'
]);

Route::post('requisitos/store/{oferta}', [
    'as' => 'store', 'uses' => 'requisitosController@store'
]);

Route::post('ofertas/inscribir/{ofID}', [
    'as' => 'inscribir', 'uses' => 'ofertasController@inscribir'
]);

Route::get('requisitos/edit/{id}/{oferta}', [
    'as' => 'edit', 'uses' => 'requisitosController@edit'
]);

Route::patch('requisitos/update/{id}/{oferta}', [
    'as' => 'update', 'uses' => 'requisitosController@update'
]);

Route::delete('requisitos/destroy/{id}/{oferta}', [
    'as' => 'destroy', 'uses' => 'requisitosController@destroy']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('curriculums', 'curriculumsController');
Route::resource('usuarios', 'usuariosController');
Route::resource('experiencias', 'experienciasController');
Route::resource('ofertas', 'ofertasController');
Route::resource('requisitos', 'requisitosController');
Route::resource('formaciones', 'formacionesController');
Route::resource('categorias', 'categoriasController');
