<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\HospedeController;
use App\Http\Controllers\HomeController;

/*Rotas Principais do Usuário*/
Route::get('/', function () {
    return view('huniphotel/home');
})-> name('home');

Route::get('/rooms', function () {
    return view('huniphotel/rooms');
})-> name('rooms');

Route::get('/about', function () {
    return view('huniphotel/about');
})-> name('about');

Route::get('/reserves', function () {
    return view('huniphotel/reserves');
})-> name('reserves');

/*Rotas das páginas de quartos*/

Route::get('/room/quarto-premium-casal', function () {
    return view('huniphotel/room/quarto-premium-casal');
})-> name('quarto-premium-casal');

Route::get('/room/premium-twin-solteiro', function () {
    return view('huniphotel/room/premium-twin-solteiro');
})-> name('premium-twin-solteiro');

Route::get('/room/quarto-master-casal', function () {
    return view('huniphotel/room/quarto-master-casal');
})-> name('quarto-master-casal');

Route::get('/room/master-solteiro', function () {
    return view('huniphotel/room/master-solteiro');
})-> name('master-solteiro');

Route::get('/room/quarto-standart-casal', function () {
    return view('huniphotel/room/quarto-standart-casal');
})-> name('quarto-standart-casal');

Route::get('/room/standart-twin-solteiro', function () {
    return view('huniphotel/room/standart-twin-solteiro');
})-> name('standart-twin-solteiro');

/* Rota da página de reserva */

Route::get('/selected-reserve', function () {
    return view('huniphotel/reserve/selected-room-reserve');
})-> name('selected-reserve');

Route::get('/login-reserve', function() {
    return view('huniphotel/reserve/login-reserve');
})-> name('login-reserve');

Route::get('/registration-reserve', function(){
    return view('huniphotel/reserve/registration-reserve');
})->name('registration-reserve');

Route::get('/logged-reserve', function(){
    return view('huniphotel/reserve/logged-reserve');
})->name('logged-reserve');

//Menu

Route::get('/menu', [MenuController::class,'index'])->name('menus');

Route::get('/menu/create', [MenuController::class,'create'])->name('menu_create');

Route::get('/menu/show/{id}', [MenuController::class, 'show'])->name('menu_show');

Route::get('/menu/delete/{id}', [MenuController::class,'destroy'])->name('menu_delete');

Route::post('/menu/store', [MenuController::class, 'store'])->name('menu_store');

Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu_edit');

Route::post('/menu_update/{id}', [MenuController::class,'update'])->name('menu_update');

//Perfil

Route::get('/perfil', [PerfilController::class,'index'])->name('perfil');

Route::get('/perfil/create', [PerfilController::class,'create'])->name('perfil_create');

Route::post('/perfil/store', [PerfilController::class, 'store'])->name('perfil_store');

Route::get('/perfil/show/{id}', [PerfilController::class, 'show'])->name('perfil_show');

Route::get('/perfil/edit/{id}', [PerfilController::class, 'edit'])->name('perfil_edit');

Route::post('/perfil_update/{id}', [PerfilController::class,'update'])->name('perfil_update');

Route::get('/perfil/delete/{id}', [PerfilController::class,'destroy'])->name('perfil_delete');

//Quarto

Route::get('/quarto', [QuartoController::class,'index'])->name('quarto');

Route::get('/quarto/create', [QuartoController::class,'create'])->name('quarto_create');

Route::post('/quarto/store', [QuartoController::class, 'store'])->name('quarto_store');

Route::get('/quarto/show/{id}', [QuartoController::class, 'show'])->name('quarto_show');

Route::get('/quarto/edit/{id}', [QuartoController::class, 'edit'])->name('quarto_edit');

Route::post('/quarto_update/{id}', [QuartoController::class,'update'])->name('quarto_update');

Route::get('/quarto/delete/{id}', [QuartoController::class,'destroy'])->name('quarto_delete');

//Serviços

Route::get('/servico', [ServicoController::class,'index'])->name('servico');

Route::get('/servico/create', [ServicoController::class,'create'])->name('servico_create');

Route::post('/servico/store', [ServicoController::class, 'store'])->name('servico_store');

Route::get('/servico/show/{id}', [ServicoController::class, 'show'])->name('servico_show');

Route::get('/servico/edit/{id}', [ServicoController::class, 'edit'])->name('servico_edit');

Route::post('/servico_update/{id}', [ServicoController::class,'update'])->name('servico_update');

Route::get('/servico/delete/{id}', [ServicoController::class,'destroy'])->name('servico_delete');

//Hospede

Route::get('/hospede', [HospedeController::class,'index'])->name('hospede');

Route::get('/hospede/create', [HospedeController::class,'create'])->name('hospede_create');

Route::post('/hospede/store', [HospedeController::class, 'store'])->name('hospede_store');

Route::get('/hospede/show/{id}', [HospedeController::class, 'show'])->name('hospede_show');

Route::get('/hospede/edit/{id}', [HospedeController::class, 'edit'])->name('hospede_edit');

Route::post('/hospede_update/{id}', [HospedeController::class,'update'])->name('hospede_update');

Route::get('/hospede/delete/{id}', [HospedeController::class,'destroy'])->name('hospede_delete');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('admin')->group(function(){
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
});