<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\DimensionController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\MenuPrincipalController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RangoAntiguedadController;
use App\Http\Controllers\RangoEdadController;
use App\Http\Controllers\TipoRespuestaController;
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
    return redirect()->route('encuesta.index');
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
Route::post('areas/{area}/activar', [AreaController::class, 'activar'])->name('areas.activar');
Route::resource('areas', AreaController::class)->names('areas');
Route::post('generos/{genero}/activar', [GeneroController::class, 'activar'])->name('generos.activar');
Route::resource('generos', GeneroController::class)->names('generos');

Route::resource('empresa', EmpresaController::class)->names('empresa');
Route::resource('pregunta', PreguntaController::class)->names('pregunta');
Route::post('pregunta/{preguntum}/activar', [PreguntaController::class, 'activar'])->name('pregunta.activar');
Route::get('encuesta', [EncuestaController::class, 'index'])->name('encuesta.index');
Route::post('encuesta/enviar_respuestas', [EncuestaController::class, 'store'])->name('encuesta.store');


Route::post('tipo-respuestas/{tipo_respuesta}/activar', [TipoRespuestaController::class, 'activar'])->name('tipo-respuestas.activar');
Route::resource('tipo-respuestas', TipoRespuestaController::class)->names('tipo-respuestas');

Route::post('dimensiones/{dimensione}/activar', [DimensionController::class, 'activar'])->name('dimensiones.activar');
Route::resource('dimensiones', DimensionController::class)->names('dimensiones');

Route::post('rango-edad/{rango_edad}/activar', [RangoEdadController::class, 'activar'])->name('rango-edad.activar');
Route::resource('rango-edad', RangoEdadController::class)->names('rango-edad');

Route::post('rango-antiguedad/{rango_antiguedad}/activar', [RangoAntiguedadController::class, 'activar'])->name('rango-antiguedad.activar');
Route::resource('rango-antiguedad', RangoAntiguedadController::class)->names('rango-antiguedad');