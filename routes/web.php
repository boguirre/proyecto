<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\MenuPrincipalController;
use App\Http\Controllers\PreguntaController;
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
    return redirect()->route('pregunta.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('menu-principal',[MenuPrincipalController::class,'index'])->name('menu-principal.index');
Route::resource('areas', AreaController::class)->names('areas');

Route::resource('empresa', EmpresaController::class)->names('empresa');
Route::resource('pregunta', PreguntaController::class)->names('pregunta');