<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Contact est un model, representation dans laravel de la table 'contacts'
// toute interaction avec la table passera par ce model
class Contact extends Model
{
    use HasFactory;

    /**
     * Le tableau $guarded permet de définir les champs de la table contacts
     * qui ne peuvent pas être remplis avec la méthode create (Contact::create()).
     * Ici, il est vide, ce qui signifie que tous les champs peuvent être remplis avec create.
     */
    protected $guarded = [];

    // Spécifie le nom de la table associée à ce modèle
    protected $table = 'contacts';
}
