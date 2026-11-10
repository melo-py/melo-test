<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BlocController;
use App\Http\Controllers\VaccinController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\CommandeController;

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

Route::get('/blocs', [BlocController::class, 'index']);
Route::get('/blocs/{id}', [BlocController::class, 'show']);
Route::post('/blocs', [BlocController::class, 'store']);
Route::put('/blocs/{id}', [BlocController::class, 'update']);
Route::delete('/blocs/{id}', [BlocController::class, 'destroy']);

Route::get('/vaccins', [VaccinController::class, 'index']);
Route::get('/vaccins/{id}', [VaccinController::class, 'show']);
Route::post('/vaccins', [VaccinController::class, 'store']);
Route::put('/vaccins/{id}', [VaccinController::class, 'update']);
Route::delete('/vaccins/{id}', [VaccinController::class, 'destroy']);

Route::get('/roles', [RoleController::class, 'index']);
Route::get('/roles/{id}', [RoleController::class, 'show']);
Route::post('/roles', [RoleController::class, 'store']);
Route::put('/roles/{id}', [RoleController::class, 'update']);
Route::delete('/roles/{id}', [RoleController::class, 'destroy']);

Route::get('/permissions', [PermissionsController::class, 'index']);
Route::get('/permissions/{id}', [PermissionsController::class, 'show']);
Route::post('/permissions', [PermissionsController::class, 'store']);
Route::put('/permissions/{id}', [PermissionsController::class, 'update']);
Route::delete('/permissions/{id}', [PermissionsController::class, 'destroy']);

Route::get('/commandes', [CommandeController::class, 'index']);
Route::get('/commandes/{id}', [CommandeController::class, 'show']);
Route::post('/commandes', [CommandeController::class, 'store']);
Route::put('/commandes/{id}', [CommandeController::class, 'update']);
Route::delete('/commandes/{id}', [CommandeController::class, 'destroy']);