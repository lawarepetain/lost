<?php

namespace App\Http\Controllers;

use App\Models\ObjetPerdu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ObjetPerduController extends Controller
{
    // 🔐 S'assurer que l'utilisateur est authentifié
    public function __construct()
    {
        $this->middleware('auth');
    }

    // 📄 Liste tous les objets perdus
    public function index()
    {
        $objets = ObjetPerdu::latest()->paginate(10);
        return view('objets.index', compact('objets'));
    }
     
    public function indexs(){
        $objets = ObjetPerdu::all();
        return view('dashboard', compact('objets'));
   }

    // 📌 Affiche un seul objet
    public function show($id)
    {
        $objet = ObjetPerdu::findOrFail($id);
        return view('objets.show', compact('objet'));
    }

    // ➕ Crée un nouvel objet perdu
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'lieu' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('objets', 'public');
        }

        ObjetPerdu::create([
            'user_id' => Auth::id(),
            'titre' => $request->titre,
            'description' => $request->description,
            'lieu' => $request->lieu,
            'date' => $request->date,
            'image' => $path,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect()->route('objets.index')->with('success', 'Objet ajouté avec succès !');
    }

    // ✏️ Met à jour un objet perdu
    public function update(Request $request, $id)
    {
        $objet = ObjetPerdu::findOrFail($id);

        // Autorisation : seul l’auteur peut modifier
        if ($objet->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'lieu' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            if ($objet->image) {
                Storage::disk('public')->delete($objet->image);
            }
            $objet->image = $request->file('image')->store('objets', 'public');
        }

        $objet->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'lieu' => $request->lieu,
            'date' => $request->date,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect()->route('objets.index')->with('success', 'Objet modifié avec succès !');
    }

    // ❌ Supprime un objet perdu
    public function destroy($id)
    {
        $objet = ObjetPerdu::findOrFail($id);

        if ($objet->user_id !== Auth::id()) {
            abort(403);
        }

        if ($objet->image) {
            Storage::disk('public')->delete($objet->image);
        }

        $objet->delete();

        return redirect()->route('objets.index')->with('success', 'Objet supprimé avec succès !');
    }
}
