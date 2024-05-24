<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contact.listeContact');
});

Route::get('contacts', [ContactController::class, 'listeContact'])->name('contact.listeContact');
