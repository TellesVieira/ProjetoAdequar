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

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/', function () {
   return view('home');
});
Route::get('/contato', function () {
   return view('contato');
});
Route::get('/serviço-gerenciamento-mídias', function () {
   return view('conteudo');
});
Route::get('/serviço-anúncio-trafego-pago', function () {
   return view('gerenciamento');
});
Route::get('/serviço-identidade-visual', function () {
   return view('identidade-visual');
});
Route::get('/serviço-material-offline', function () {
   return view('material');
});
Route::get('/portfolio', function () {
   return view('portfolio');
});
Route::get('/serviço-website', function () {
   return view('website');
});
Route::get('/planejamento-estratégico-Marketing', function () {
   return view('planejamento');
});