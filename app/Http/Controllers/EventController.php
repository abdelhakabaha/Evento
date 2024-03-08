<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
{
    return view('profile.organisatuer.create');
}





// public function store(Request $request)
// {
//     // Valider les données du formulaire
//     $validatedData = $request->validate([
//         'title' => 'required|string|max:255',
//         'description' => 'required|string',
//         'date' => 'required|date',
//     ]);

//     // Créer un nouvel événement avec les données validées
//     $event = new Event();
//     $event->user_id = $validatedData['user_id'];
//     $event->title = $validatedData['title'];
//     $event->categorie_id = $validatedData['categorie_id'];
//     $event->description = $validatedData['description'];
//     $event->date = $validatedData['date'];
//     $event->lieu = $validatedData['lieu'];
//     $event->image = $validatedData['image'];
//     $event->idcategorie = $validatedData['idcategorie'];
//     $event->nbPlace = $validatedData['nbPlace'];
//     $event->isValide = $validatedData['isValide'];
//     $event->save();

//     // Rediriger l'utilisateur vers la page d'accueil avec un message de succès
//     return redirect()->route('home')->with('success', 'Événement ajouté avec succès');
// }
}
