<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/sobre_nosotros', function () {
    return view('sobre_nosotros');
})->name('sobre_nosotros');

Route::get('/mapa', function () {
    return view('mapa');
})->name('mapa');

Route::get('/administracion', function () {
    return view('administracion');
})->name('administracion');

Route::get('/premium', function () {
    return view('premium');
})->name('premium');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/terminosycondiciones', function () {
    return view('terminosycondiciones');
})->name('terminosycondiciones');

Route::post('/administracion', [MaquinaExpendedoraController::class, 'store'])->name('maquina-expendedora.store');