<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user =User::find($id);
        if($user){
            return response()->json($user);
        }else{
            return response()->json(['message'=> 'User not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user =  User::findOrFail($id);
        $resp = $user->update($request ->all());
        return response()->json(['message'=>'User updated successfully'],200);
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user =  Users::findOrFail($id);
        $resp = $user->delete($request ->all());
        return response()->json(['message'=>'User deleted successfully'],200);    
    }
}
