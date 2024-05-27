<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Lancer les migrations.
     * Cette méthode est utilisée pour créer la table contacts dans la base de données.
     */
    public function up(): void
    {
        // Création de la table contacts
        Schema::create('contacts', function (Blueprint $table) {
            // Ajoute une colonne id (clé primaire, auto-incrémentée)
            $table->id();
            // Ajoute une colonne nom de type chaîne de caractères
            $table->string('nom');
            // Ajoute une colonne prenom de type chaîne de caractères
            $table->string('prenom');
            // Ajoute une colonne telephone de type entier
            $table->integer('telephone');
            // Ajoute une colonne age de type entier
            $table->integer('age');
            // Ajoute deux colonnes pour les timestamps (created_at et updated_at)
            $table->timestamps();
        });
    }

    /**
     * Inverser les migrations.
     * Cette méthode est utilisée pour supprimer la table contacts si elle existe.
     */
    public function down(): void
    {
        // Supprime la table contacts
        Schema::dropIfExists('contacts');
    }
};
