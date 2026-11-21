<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloc;

class BlocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blocs = Bloc::all();
        return response()->json($blocs);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
                'label_bloc'=>'required|string|max:128'
        ]);
        $bloc = Bloc::create($validated);
        return response()->json(['message' => 'Bloc Cree avec succes'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bloc = Bloc::findOFail($id);
        return response()->json($bloc);
       


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bloc = Bloc::findOrFail($id);
        $bloc->update($request->all());
        return response()->json(['message' => 'Bloc mis a jour avec succes!'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bloc = Bloc::findOrFail($id);
        $bloc->delete($request->all());
        return response()->json(["message => Bloc supprime avec succes!"], 200);
    }
}
