<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnvioCadastro;

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

Route::get('/pagina_inicial', 'CandidatosController@index');

Route::get('/pagina_cadastro_analist', 'CandidatosController@Analyst');
Route::post('/pagina_enviocadastro_analist', 'CandidatosController@storeAnalyst')->name('enviar_cadastro_analyst');

Route::get('/pagina_cadastro_fullStack', 'CandidatosController@Fullstack');
Route::post('/pagina_enviocadastro_fullStack', 'CandidatosController@storeFullstack')->name('enviar_cadastro_fullstack');
