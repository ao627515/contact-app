<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Méthode pour afficher la liste des contacts
    public function listeContact()
    {
        // Récupère tous les enregistrements de la table 'contacts'
        $listeContacts = Contact::all();

        // Envoie les contacts à la vue 'contacts.listeContact' en utilisant compact
        // La fonction compact permet de passer des variables à la vue sans le signe '$'
        return view('contacts.listeContact', compact('listeContacts'));
    }

    // Méthode pour afficher le formulaire d'ajout de contact
    public function ajouterContact()
    {
        // Retourne la vue pour ajouter un contact
        return view('contacts.ajouterContact');
    }

    // Méthode pour enregistrer un nouveau contact
    public function enregistrerContact(Request $request)
    {
        // Validation des données reçues du formulaire
        // Les règles de validation sont spécifiées pour chaque champ
        // Plus d'informations sur la validation : https://laravel.com/docs/11.x/validation#main-content

        // La différence entre 'required' et 'nullable' :
        // 'required' signifie que le champ doit obligatoirement avoir une valeur.
        // 'nullable' signifie que le champ peut être vide (null), mais s'il contient une valeur, elle doit respecter les règles spécifiées.
        $request->validate(
            [
                'nom' => ['required', 'string', 'max:200'],
                'prenom' => ['required', 'string', 'max:200'],
                'telephone' => ['required', 'numeric'],
                'age' => ['nullable', 'numeric'],
            ],
            // Messages d'erreur personnalisés en français
            [
                'nom.required' => 'Le nom est obligatoire.',
                'nom.string' => 'Le nom doit être une chaîne de caractères.',
                'nom.max' => 'Le nom ne doit pas dépasser 200 caractères.',
                'prenom.required' => 'Le prénom est obligatoire.',
                'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
                'prenom.max' => 'Le prénom ne doit pas dépasser 200 caractères.',
                'telephone.required' => 'Le téléphone est obligatoire.',
                'telephone.numeric' => 'Le téléphone doit être un nombre.',
                'age.numeric' => 'L\'âge doit être un nombre.',
            ]
        );

        // Crée un nouveau contact avec les données du formulaire
        Contact::create($request->all());

        // Redirige vers la liste des contacts avec un message de succès
        return redirect()->route('contact.listeContact')->with('success', 'Contact enregistré');
    }

    // Méthode pour afficher le formulaire de modification d'un contact
    public function modifierContact($id)
    {
        // Récupère le contact par son ID, renvoie une 404 si non trouvé
        $contact = Contact::findOrFail($id);

        // Envoie le contact à la vue 'contacts.modifierContact'
        return view('contacts.modifierContact', compact('contact'));
    }

    // Méthode pour enregistrer les modifications d'un contact
    public function enregistrerModification(Request $request, $id)
    {
        // Validation des données reçues du formulaire
        // Les règles de validation sont spécifiées pour chaque champ
        // Plus d'informations sur la validation : https://laravel.com/docs/11.x/validation#main-content

        // La différence entre 'required' et 'nullable' :
        // 'required' signifie que le champ doit obligatoirement avoir une valeur.
        // 'nullable' signifie que le champ peut être vide (null), mais s'il contient une valeur, elle doit respecter les règles spécifiées.
        $request->validate(
            [
                'nom' => ['required', 'string', 'max:200'],
                'prenom' => ['required', 'string', 'max:200'],
                'telephone' => ['required', 'numeric'],
                'age' => ['nullable', 'numeric'],
            ],
            // Messages d'erreur personnalisés en français
            [
                'nom.required' => 'Le nom est obligatoire.',
                'nom.string' => 'Le nom doit être une chaîne de caractères.',
                'nom.max' => 'Le nom ne doit pas dépasser 200 caractères.',
                'prenom.required' => 'Le prénom est obligatoire.',
                'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
                'prenom.max' => 'Le prénom ne doit pas dépasser 200 caractères.',
                'telephone.required' => 'Le téléphone est obligatoire.',
                'telephone.numeric' => 'Le téléphone doit être un nombre.',
                'age.numeric' => 'L\'âge doit être un nombre.',
            ]
        );

        // Récupère le contact par son ID, renvoie une 404 si non trouvé
        $contact = Contact::findOrFail($id);

        // Met à jour le contact avec les nouvelles données
        $contact->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'age' => $request->age
        ]);

        // Redirige vers la liste des contacts avec un message de succès
        return redirect()->route('contact.listeContact')->with('success', 'Contact modifié');
    }

    // Méthode pour supprimer un contact
    public function supprimerContact($id)
    {
        // Récupère le contact par son ID, renvoie une 404 si non trouvé
        $contact = Contact::findOrFail($id);

        // Supprime le contact de la base de données
        $contact->delete();

        // Redirige vers la liste des contacts avec un message de succès
        return redirect()->route('contact.listeContact')->with('success', 'Contact supprimé');
    }

    // Méthode pour afficher les détails d'un contact
    public function detailContact($id)
    {
        // Récupère le contact par son ID, renvoie une 404 si non trouvé
        $contact = Contact::findOrFail($id);

        // Envoie le contact à la vue 'contacts.detailContact'
        return view('contacts.detailContact', compact('contact'));
    }
}
