<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

/*Rotas dos Quartos*/

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

Route::get('/menu', [MenuController::class,'index'])->name('menus');

Route::get('/menu/create', [MenuController::class,'create'])->name('menu_create');

Route::get('/menu/show/{id}', [MenuController::class, 'show'])->name('menu_show');

Route::get('/menu/delete/{id}', [MenuController::class,'destroy'])->name('menu_delete');

Route::post('/menu/store', [MenuController::class, 'store'])->name('menu_store');

Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu_edit');

Route::post('/menu_update/{id}', [MenuController::class,'update'])->name('menu_update');

Route::get('/perfil', [PerfilController::class,'index'])->name('perfil');
