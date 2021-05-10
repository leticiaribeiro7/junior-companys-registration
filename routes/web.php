<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FederacaoController;



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
    return view('welcome');
});

Route::get('/cadastro_federacao', function () {
    return view('cadastro_federacao');
})->middleware(['auth'])->name('cadastro_federacao');

Route::post('/federacao_created', [FederacaoController::class, 'storeFED'])
->middleware(['auth'])->name('federacao_created');

Route::get('/dashboard', [FederacaoController::class, 'listAll'])
->middleware(['auth'])->name('dashboard');

Route::get('/cadastro_ej', [FederacaoController::class, 'createEJ'])
->middleware(['auth'])->name('cadastro_ej');

Route::post('/ej_created', [FederacaoController::class, 'storeEJ'])
->middleware(['auth'])->name('ej_created');

Route::get('/busca_federacao', function (){
    return view('busca');
})->middleware(['auth'])->name('busca_federacao');

Route::any('/resultados', [FederacaoController::class, 'searchEJ'])
->middleware(['auth'])->name('resultados');

Route::any('/resultados_por_fed', [FederacaoController::class, 'listByFed'])
->middleware(['auth'])->name('resultados_por_fed');

require __DIR__.'/auth.php';
