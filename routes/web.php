<?php

use App\Http\Controllers\AgendamentosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
})->name('index');

Route::post('/cadastrar', [AgendamentosController::class, 'store'])->name('agendamentos.store');

Route::get('/consulta', [AgendamentosController::class, 'show'])->name('agendamentos.show');
