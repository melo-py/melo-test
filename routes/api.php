<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\Usercontroller;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users',[Usercontroller::class,'index']);
Route::post('/users',[Usercontroller::class,'store']);
Route::get('/users/{id}',[Usercontroller::class,'show']);
Route::put('/users/{id}',[Usercontroller::class,'update']);
Route::delete('/users/{id}',[Usercontroller::class,'destroy']);

Route::get('/produits', [ProduitController::class, 'index']);
Route::get('/produits/{id}', [ProduitController::class, 'show']);
Route::post('/produits', [ProduitController::class, 'store']);
Route::put('/produits/{id}', [ProduitController::class, 'update']);
Route::delete('/produits/{id}', [ProduitController::class, 'destroy']);

Route::get('/blocs', [ProduitController::class, 'index']);
Route::get('/blocs/{id}', [ProduitController::class, 'show']);
Route::post('/blocs', [ProduitController::class, 'store']);
Route::put('/blocs/{id}', [ProduitController::class, 'update']);
Route::delete('/blocs/{id}', [ProduitController::class, 'destroy']);