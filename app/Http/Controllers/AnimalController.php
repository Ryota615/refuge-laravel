<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AnimalController extends Controller
{
    // Lister les animaux
    public function index()
    {
        return response()->json(Animal::all());
    }

    // Créer un animal
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom'       => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'status'    => ['sometimes', Rule::in(['DISPONIBLE', 'ADOPTE', 'EN_SOIN'])],
        ]);

        $animal = Animal::create($data);

        return response()->json($animal, 201);
    }

    // Modifier le statut
    public function updateStatus(Request $request, Animal $animal)
    {
        $data = $request->validate([
            'status' => ['required', Rule::in(['DISPONIBLE', 'ADOPTE', 'EN_SOIN'])],
        ]);

        $animal->update($data);

        return response()->json($animal);
    }

    // Modifier un animal
    public function update(Request $request, Animal $animal)
    {
        $data = $request->validate([
            'nom'       => 'sometimes|required|string|max:255',
            'categorie' => 'sometimes|required|string|max:255',
            'status'    => ['sometimes', Rule::in(['DISPONIBLE', 'ADOPTE', 'EN_SOIN'])],
        ]);

        $animal->update($data);

        return response()->json($animal);
    }
}
