<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function listeContact(){
        $listeContacts = Contact::all();

        return view('contacts.listeContact', compact('listeContacts'));
    }

    public function ajouterContact(){
        return view('contacts.ajouterContact');
    }

    public function enregistrerContact(Request $request){
        $nom = $request->nom;
        $prenom = $request->prenom;
        $telephone = $request->telephone;
        $age = $request->age;

        // enregistrement en base de donnee

        Contact::create(
            [
                'nom' => $nom,
                'prenom' => $prenom,
                'telephone' => $telephone,
                'age' => $age
            ]
        );

        return redirect()->route('contact.listeContact')->with('success', 'Contact enregistrer');
    }

    public function modifierContact($id){
        $contact = Contact::findOrFail($id);

        return view('contacts.modifierContact', compact('contact'));
    }

    public function enregistrerModification(Request $request, $id){
        $contact = Contact::findOrFail($id);

        $contact->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'age' => $request->age
        ]);

        return redirect()->route('contact.listeContact')->with('success', 'Contact modifier');
    }

    public function supprimerContact($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact.listeContact')->with('success', 'Contact supprimer');
    }
}
