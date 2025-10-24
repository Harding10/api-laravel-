<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Bienvenue sur l\'API Laravel',
        'version' => '1.0',
        'endpoints' => [
            'POST /api/register' => 'Créer un nouveau compte',
            'POST /api/login' => 'Se connecter et obtenir un token',
            'GET /api/user' => 'Obtenir les informations de l\'utilisateur (authentifié)',
            'GET /api/posts' => 'Liste des posts (authentifié)',
            'POST /api/posts' => 'Créer un nouveau post (authentifié)',
            'GET /api/posts/{id}' => 'Détails d\'un post (authentifié)',
            'PUT /api/posts/{id}' => 'Modifier un post (authentifié)',
            'DELETE /api/posts/{id}' => 'Supprimer un post (authentifié)'
        ]
    ]);
});
