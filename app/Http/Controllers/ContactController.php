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
}
