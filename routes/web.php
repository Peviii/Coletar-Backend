<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ColetaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PasswordUpdateController;
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

Route::get('/', function() {
    return view('welcome');
})->name("welcome");
/* AINDA A EDITAR/CONFIGURAR */

//AUTENTICAÇÃO
//USER
Route::get('/loginUser',[LoginController::class,'loginUser']);
Route::post('/userLogin',[LoginController::class,'userlogin']);
//COLETA
Route::get('/loginColeta',[LoginController::class,'loginColeta']);
Route::post('/coletaLogin',[LoginController::class,'coletaLogin']);
Route::get('/Logout',[loginController::class,'logout']);
//CADASTRO
Route::get('/Cadastro',[UserController::class,'create']);
Route::post('/Cadastro',[UserController::class,'store']);
//DASHBOARD
Route::get('/Dashboard',[UserController::class,'dashboard'])
->middleware('auth'); 

//*******************COLETA SELETIVA*********************************
//DASHBOARD
Route::get('/Dashboard/Coleta',[ColetaController::class,'dashboard'])
->middleware('Coleta');
//CADASTRO DE PONTO DE COLETA
Route::get('/Cadastro-Coleta',[ColetaController::class,'create'])
->middleware('Coleta');
Route::post('/Cadastro-Coleta',[ColetaController::class,'store'])
->middleware('Coleta');
// EDIÇÃO DOS PONTOS DE COLETA
Route::get('/Coleta/{id}/Edit',[ColetaController::class,'edit'])
->middleware('Coleta');
Route::put('/Coleta/{id}/Update',[ColetaController::class,'update'])
->middleware('Coleta');

//*******************ROTAS DO MAPA***********************************
Route::get('/Home',[MapController::class,'index'])
->middleware('auth');
Route::get('/Home/{id}/Coleta',[MapController::class,'show'])
->middleware('auth');

//*******************************************************************
//SENHA ATUALIZAÇÃO //INCOMPLETA
Route::get('/forgot-password',[PasswordUpdateController::class,'forgotPassword'])->middleware('guest');
Route::post('/forgot-password',[PasswordUpdateController::class,'mailRequest'])->middleware('guest');
Route::get('/reset-password/{token}',[PasswordUpdateController::class,'resetPassword'])->middleware('guest')->name('password.reset');
Route::post('/reset-password',[PasswordUpdateController::class,'updatePassword'])->middleware('guest');
