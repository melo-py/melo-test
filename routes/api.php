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


Route::apiResource('/users',Usercontroller::class);

Route::apiResource('/produits', ProduitController::class);

Route::apiResource('/blocs',BlocController::class);

Route::apiResource('/vaccins',VaccinController::class);

Route::apiResource('/roles',RoleController::class,);

Route::apiResource('/permissions', PermissionsController::class);

Route::apiResource('/commandes',CommandeController::class);