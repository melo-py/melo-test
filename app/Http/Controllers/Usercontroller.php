<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

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
        $validated = $request->validate([
            'nom_user' => 'required|string|max:128',
            'prenom_user' => 'required|string|max:128',
            'phone_user' => 'required|string|max:12',
            'email_user' => 'required|email|max:50|unique:users,email_user',
            'sexe_user' => ['required', Rule::in(['M','F'])],
            'login_user' => 'required|string|max:50|unique:users,login_user',
            'password_user' => 'required|string|min:8|confirmed',
            'password_user_confirmation' => 'required|string',
        ]);
        $user= User::create([
            'nom_user'=>$validated['nom_user'],
            'prenom_user'=>$validated['prenom_user'],
            'phone_user'=>$validated['phone_user'],
            'email_user'=>$validated['email_user'],
            'sexe_user'=>$validated['sexe_user'],
            'login_user'=>$validated['login_user'],
            'password_user'=>Hash::make($validated['password_user']),
            'status_user' => 'ACTIF',

        ]);
        return response()->json($user->refresh(), 201);
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
        $user =  User::findOrFail($id);
        $user->delete();
        return response()->json(['message'=>'User deleted successfully'],200);    
    }
}
