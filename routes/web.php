<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contact.listeContact');
});

Route::get('contacts', [ContactController::class, 'listeContact'])->name('contact.listeContact');
Route::get('contacts/creer', [ContactController::class, 'ajouterContact'])->name('contact.ajouterContact');
Route::post('contacts/enregistrer', [ContactController::class, 'enregistrerContact'])->name('contact.enregistrerContact');
