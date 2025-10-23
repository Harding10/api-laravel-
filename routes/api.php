<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes d'API Publiques (Non Authentifiées)
|--------------------------------------------------------------------------
*/

// Route de connexion : permet de récupérer un token
Route::post('login', [AuthController::class, 'login']);


// Route inscription
Route::post('register', [AuthController::class, 'register']);


/*
|--------------------------------------------------------------------------
| Routes d'API Protégées par Sanctum
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->group(function () {

    // Route pour obtenir les infos de l'utilisateur connecté
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Routes CRUD pour les posts
    Route::apiResource('posts', PostController::class);
});
