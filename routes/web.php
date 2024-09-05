<?php

use App\Http\Controllers\FaitController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', [FaitController::class, 'home'])
    ->name('accueil');

// Liste des faits
Route::get('/faits', [FaitController::class, 'index'])
    ->name('faits.index');

// Formulaire d'ajout d'un fait
Route::get('/faits/create', [FaitController::class, 'create'])
    ->name('faits.create');
    
// Affiche un fait
Route::get('/faits/{id}', [FaitController::class, 'show'])
    ->name('faits.show');

// Enregistre un nouveau fait
Route::post('/faits/store', [FaitController::class, 'store'])
    ->name('faits.store');

// Formulaire de modification d'un fait
Route::get('/faits/edit/{id}', [FaitController::class, 'edit'])
    ->name('faits.edit')
    ->whereNumber('id');

// Mettre à jour un fait
Route::put('/faits/update/{id}', [FaitController::class, 'update'])
    ->name('faits.update')
    ->whereNumber('id');
    
// Supprime un fait
Route::delete('/faits/destroy/{id}', [FaitController::class, 'destroy'])
    ->whereNumber('id')
    ->name('faits.destroy');
