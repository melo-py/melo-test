<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Validation\Rule;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return response()->json($produits);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'label_produit' =>'required|string|max:128',
            'description_produit' => 'required|string|max:200',
            'type_produit' => 'required|string|max:100',
            'quantite_produit' =>'required|integer|min:0',
            'prix_produit' => 'required|numeric|min:0',
            'user_id' => 'required|integer|exists:users,id',
            'bloc_id' => 'required|integer|exists:bloc,bloc_id'
        ]);
        $produit = Produit::create($validated);
        return response()->json($produit, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produit = Produit::findOrFail($id);
        return response()->json($produit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit = Produit::findOrFail($id);
        // $donnees = $request->validate([
       //'nom_produit' => 'sometimes|string|max:255',
       //'prix_produit' => 'sometimes|numeric|min:0'
   // ]);
        $produit->update($request->all());
        return response()->json($produit);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();
        return response()->json(['message' => 'Produit supprimé avec succès'], 200);
    }
}
