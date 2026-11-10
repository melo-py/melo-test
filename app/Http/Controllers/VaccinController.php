<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccin;

class VaccinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vaccins = Vaccin::all();
        return response()->json($vaccins);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vaccin = Vaccin::create($request->all());
        return response()->json($vaccin, 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vaccin = Vaccin::findOrFail($id);
        return response()->json($vaccin);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vaccin = Vaccin::findOrFail($id);
        $vaccin->update($request->all());
        return response()->json($vaccin);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vaccin = Vaccin::findOrFail($id);
        $vaccin->delete();
        return response()->json(['message' => 'Vaccin supprimé avec succès'], 200);
    }
}
