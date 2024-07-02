<?php
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::post('/series/salvar', [SeriesController::class, 'store']);
Route::get('/series/{serie}', [SeriesController::class, 'show']);
Route::get('/series/{serie}/edit', [SeriesController::class, 'edit']);
Route::put('/series/{serie}', [SeriesController::class, 'update']);
Route::delete('/series/{serie}', [SeriesController::class, 'destroy']);

