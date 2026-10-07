<?php

use Illuminate\Support\Facades\Route;
use App\Models\Animal;

    Route::get('/animaux', function () {
        return view('animaux', ['animaux' => Animal::all()]);
    });
