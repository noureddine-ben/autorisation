<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/demande', function () {
    return view('demande');
});
Route::post('/edit_auto', [App\Http\Controllers\Controller::class, 'editautorisation']);
Route::post('/ajouter_auto', [App\Http\Controllers\Controller::class, 'ajouterautorisation']);
Route::post('/ajouter_emploi', [App\Http\Controllers\Controller::class, 'ajouteremploi']);
Route::post('/editemploi/{id}', [App\Http\Controllers\Controller::class, 'editemploi']);
Route::post('/ajouter_houraire', [App\Http\Controllers\Controller::class, 'ajouterhouraire']);
Route::get('/delete_emploi/{id}', [App\Http\Controllers\Controller::class, 'deleteemploi']);
Route::get('/getemploi/{id}', [App\Http\Controllers\Controller::class, 'getemploi']);
Route::get('/getemplois/{ref}', [App\Http\Controllers\Controller::class, 'getemplois']);
Route::get('/listautorisation', [App\Http\Controllers\Controller::class, 'listautorisation']);
Route::get('/getautorisation/{id}', [App\Http\Controllers\Controller::class, 'getautorisation']);
Route::get('/getpointage/{id}', [App\Http\Controllers\Controller::class, 'getpointage']);
Route::get('/getheurses', [App\Http\Controllers\Controller::class, 'getheurses']);


