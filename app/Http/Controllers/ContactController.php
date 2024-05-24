<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function listeContact(){
        return view('contacts.listeContact');
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
    }
}
