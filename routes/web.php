<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\HospedeController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\DependenteController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ReservaServicosController;
use App\Http\Controllers\ServicosReservaController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/quarto', [QuartoController::class,'index'])->name('quarto');
Route::get('/quarto/show/{id}', [QuartoController::class, 'show'])->name('quarto_show');
Route::get('/quarto/edit/{id}', [QuartoController::class, 'edit'])->name('quarto_edit');
Route::post('/quarto_update/{id}', [QuartoController::class,'update'])->name('quarto_update');
Route::get('/quarto/delete/{id}', [QuartoController::class,'destroy'])->name('quarto_delete');

Route::get('/servico', [ServicoController::class,'index'])->name('servico');
Route::get('/servico/show/{id}', [ServicoController::class, 'show'])->name('servico_show');
Route::get('/servico/edit/{id}', [ServicoController::class, 'edit'])->name('servico_edit');
Route::post('/servico_update/{id}', [ServicoController::class,'update'])->name('servico_update');
Route::get('/servico/delete/{id}', [ServicoController::class,'destroy'])->name('servico_delete');

Route::get('/hospede', [HospedeController::class,'index'])->name('hospede');
Route::get('/hospede/show/{id}', [HospedeController::class, 'show'])->name('hospede_show');
Route::get('/hospede/edit/{id}', [HospedeController::class, 'edit'])->name('hospede_edit');
Route::post('/hospede_update/{id}', [HospedeController::class,'update'])->name('hospede_update');
Route::get('/hospede/delete/{id}', [HospedeController::class,'destroy'])->name('hospede_delete');

Route::get('/dependente', [DependenteController::class,'index'])->name('dependente');
Route::get('/dependente/show/{id}', [DependenteController::class, 'show'])->name('dependente_show');
Route::get('/dependente/edit/{id}', [DependenteController::class, 'edit'])->name('dependente_edit');
Route::post('/dependente_update/{id}', [DependenteController::class,'update'])->name('dependente_update');
Route::get('/dependente/delete/{id}', [DependenteController::class,'destroy'])->name('dependente_delete');

Route::get('/reserva', [ReservaController::class,'index'])->name('reserva');
Route::get('/reserva/show/{id}', [ReservaController::class, 'show'])->name('reserva_show');
Route::get('/reserva/edit/{id}', [ReservaController::class, 'edit'])->name('reserva_edit');
Route::post('/reserva_update/{id}', [ReservaController::class,'update'])->name('reserva_update');
Route::get('/reserva/delete/{id}', [ReservaController::class,'destroy'])->name('reserva_delete');

Route::get('/reserva_servico', [ReservaServicosController::class,'index'])->name('reserva_servico');
Route::get('/reserva_servico/create', [ReservaServicosController::class,'create'])->name('reserva_servico_create');
Route::post('/reserva_servico/store', [ReservaServicosController::class, 'store'])->name('reserva_servico_store');
Route::get('/reserva_servico/show/{id}', [ReservaServicosController::class, 'show'])->name('reserva_servico_show');
Route::get('/reserva_servico/edit/{id}', [ReservaServicosController::class, 'edit'])->name('reserva_servico_edit');
Route::post('/reserva_servico_update/{id}',[ReservaServicosController::class,'update'])->name('reserva_servico_update');
Route::get('/reserva_servico/delete/{id}',[ReservaServicosController::class,'destroy'])->name('reserva_servico_delete');

Route::middleware('funcionario')->group(function(){
    Route::get('/funcionario-auth', [HomeController::class, 'funcionario'])->name('funcionario');

    Route::get('/funcionario', [FuncionarioController::class,'index'])->name('funcionario');
    Route::get('/funcionario/create', [FuncionarioController::class,'create'])->name('funcionario_create');
    Route::post('/funcionario/store', [FuncionarioController::class, 'store'])->name('funcionario_store');
    Route::get('/funcionario/show/{id}', [FuncionarioController::class, 'show'])->name('funcionario_show');
    Route::get('/funcionario/edit/{id}', [FuncionarioController::class, 'edit'])->name('funcionario_edit');
    Route::post('/funcionario_update/{id}', [FuncionarioController::class,'update'])->name('funcionario_update');
    Route::get('/funcionario/delete/{id}', [FuncionarioController::class,'destroy'])->name('funcionario_delete');

    Route::get('/servico/create', [ServicoController::class,'create'])->name('servico_create');
    Route::post('/servico/store', [ServicoController::class, 'store'])->name('servico_store');

    Route::get('/quarto/create', [QuartoController::class,'create'])->name('quarto_create');
    Route::post('/quarto/store', [QuartoController::class, 'store'])->name('quarto_store');

});

Route::middleware('hospede')->group(function(){
    Route::get('/hospede', [HomeController::class, 'hospede'])->name('hospede');

    Route::get('/hospede/create', [HospedeController::class,'create'])->name('hospede_create');
    Route::post('/hospede/store', [HospedeController::class, 'store'])->name('hospede_store');

    Route::get('/dependente/create/{id}', [DependenteController::class,'create'])->name('dependente_create');
    Route::post('/dependente/store', [DependenteController::class, 'store'])->name('dependente_store');

    Route::get('/reserva/create', [ReservaController::class,'create'])->name('reserva_create');
    Route::post('/reserva/store', [ReservaController::class, 'store'])->name('reserva_store');
});
