<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permissions;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permissions::all();
        return response()->json($permissions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $validated = $request->validate([
                'label_permission'=>'required|string|max:128',
        ]);
        $permission = Permissions::create($validated);
        return response()->json($permission, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $permission = Permissions::findOrFail($id);
        return response()->json($permission);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $permission = Permissions::findOrFail($id);
        $permission->update($request->all());
        return response()->json($permission);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission = Permissions::findOrFail($id);
        $permission->delete();
        return response()->json(['message' => 'Permission supprimée avec succès'], 200);
    }
}
