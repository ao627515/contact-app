<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contact.listeContact');
});

Route::get('contacts', [ContactController::class, 'listeContact'])->name('contact.listeContact');
Route::get('contacts/creer', [ContactController::class, 'ajouterContact'])->name('contact.ajouterContact');
Route::post('contacts/enregistrer', [ContactController::class, 'enregistrerContact'])->name('contact.enregistrerContact');
Route::get('contacts/{id}/modifier', [ContactController::class, 'modifierContact'])->name('contact.modifierContact');
Route::put('contacts/{id}/modifier/enregistrer', [ContactController::class, 'enregistrerModification'])->name('contact.enregistrerModification');
Route::delete('contacts/{id}/supprimer', [ContactController::class, 'supprimerContact'])->name('contact.supprimerContact');
