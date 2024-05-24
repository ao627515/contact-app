<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contact.index');
});

Route::get('contacts', [ContactController::class, 'index'])->name('contact.index');
