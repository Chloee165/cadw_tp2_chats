<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FaitController extends Controller
{
    /**
     * Affiche un fait aléatoire et des images de chats sur la page d'accueil.
     */
    public function home()
    {
        $fait = Fait::inRandomOrder()->first();
        $reponse = Http::get('https://api.thecatapi.com/v1/images/search?limit=3');
        $chatImages = array_slice($reponse->json(), 0, 3);

        return view('home', [
            'fait' => $fait,
            'chatImages' => $chatImages,
        ]);
    }

    /**
     * Affiche la liste de tous les faits.
     */
    public function index()
    {
        $faits = Fait::orderBy('id', 'asc')->get();

        return view('faits.index', [
            'faits' => $faits,
        ]);
    }

    /**
     * Affiche un fait
     */
    public function show($id)
    {
        $fait = Fait::findOrFail($id);

        return view('faits.show', [
            'fait' => $fait,
        ]);
    }

    /**
     * Affiche le formulaire d'ajout d'un nouveau fait.
     */
    public function create()
    {
        return view('faits.create');
    }

    /**
     * Enregistre un nouveau fait dans la base de données.
     */
    public function store(Request $request)
    {

        $valides = $request->validate([
            'contenu' => 'required|string|max:255',
        ], [
            'contenu.required' => "Le fait est requis.",
            'contenu.max' => "Le fait ne peut pas dépasser :max caractères.",
        ]);

        Fait::create($valides);
        return redirect()
            ->route('faits.index')
            ->with('success', "Le fait a été ajouté avec succès!");
    }

    /**
     * Affiche le formulaire de modification d'un fait.
     */
    public function edit(int $id)
    {
        $fait = Fait::findOrFail($id);

        return view('faits.edit', [
            'fait' => $fait,
        ]);
    }

    /**
     * Met à jour un fait existant dans la bdd.
     */
    public function update(Request $request, int $id)
    {
        $valides = $request->validate([
            'contenu' => 'required|string|max:255',
        ], [
            'contenu.required' => "Le fait est requis.",
            'contenu.max' => "Le fait ne peut pas dépasser :max caractères.",
        ]);

        $fait = Fait::findOrFail($id);
        $fait->update($valides);
        return redirect()
            ->route('faits.index')
            ->with('success', "Le fait a été modifié avec succès!");
    }
    /**
     * Supprime un fait de la base de données.
     */
    public function destroy(int $id)
    {
        $fait = Fait::findOrFail($id);
        $fait->delete();
        return redirect()
            ->route('faits.index')
            ->with('success', "Le fait a été supprimé avec succès!");
    }
}
