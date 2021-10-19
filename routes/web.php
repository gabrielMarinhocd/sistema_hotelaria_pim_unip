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
Route::get('/', function () {
    return view('HunipHotel/home');
})-> name('home');

Route::get('/Quartos', function () {
    return view('HunipHotel/quartos');
})-> name('quartos');

Route::get('/SobreNos', function () {
    return view('HunipHotel/about');
})-> name('about');

Route::get('/Reservas', function () {
    return view('HunipHotel/reservas');
})-> name('reservas');

Route::get('/menu', [MenuController::class,'index'])->name('menus');

Route::get('/menu/create', [MenuController::class,'create'])->name('menu_create');

Route::get('/menu/show/{id}', [MenuController::class, 'show'])->name('menu_show');

Route::get('/menu/delete/{id}', [MenuController::class,'destroy'])->name('menu_delete');

Route::post('/menu/store', [MenuController::class, 'store'])->name('menu_store');

Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu_edit');

Route::post('/menu_update/{id}', [MenuController::class,'update'])->name('menu_update');