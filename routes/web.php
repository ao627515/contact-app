<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route pour la page d'accueil. Redirige vers la liste des contacts.
Route::get('/', function () {
    return redirect()->route('contact.listeContact');
});


/**
 *  Route pour afficher la liste des contacts
 *
 * [ContactController::class, 'listeContact'] signifie que lorsque cette route est appelée,
 * elle utilise la méthode listeContact du contrôleur ContactController pour gérer la requête.
 *
 * ->name('contact.listeContact') donne un nom à la route, ce qui permet de la référencer facilement
 * ailleurs dans l'application, comme dans des redirections ou des liens.
 */
Route::get('contacts', [ContactController::class, 'listeContact'])->name('contact.listeContact');

// Route pour afficher le formulaire d'ajout d'un nouveau contact
Route::get('contacts/creer', [ContactController::class, 'ajouterContact'])->name('contact.ajouterContact');

// Route pour enregistrer un nouveau contact
Route::post('contacts/enregistrer', [ContactController::class, 'enregistrerContact'])->name('contact.enregistrerContact');

/**
 * Route pour afficher le formulaire de modification d'un contact existant
 * {id} est un paramètre dynamique de la route. Il représente l'identifiant du contact à modifier.
 * Lorsque cette route est appelée, l'identifiant du contact est passé à la méthode modifierContact
 * du contrôleur ContactController pour qu'elle sache quel contact doit être modifié.
 */

Route::get('contacts/{id}/modifier', [ContactController::class, 'modifierContact'])->name('contact.modifierContact');

/**
 * Route pour enregistrer les modifications apportées à un contact existant
 * {id} est également utilisé ici pour spécifier quel contact doit être mis à jour.
 */
Route::put('contacts/{id}/modifier/enregistrer', [ContactController::class, 'enregistrerModification'])->name('contact.enregistrerModification');

/**
 * Route pour supprimer un contact existant
 * {id} indique quel contact doit être supprimé.
 */
Route::delete('contacts/{id}/supprimer', [ContactController::class, 'supprimerContact'])->name('contact.supprimerContact');

/**
 * Route pour afficher les détails d'un contact existant
 * {id} indique quel contact doit être affiché en détail.
 */
Route::get('contacts/{id}/detail', [ContactController::class, 'detailContact'])->name('contact.detailContact');
