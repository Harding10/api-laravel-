<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     *Afficher la leste de tout les post.
     */
    public function index()
    {
        $post = Post::all();

        return PostResource::collection($post);
    }

    /**
     *Stockez une ressource nouvellement créée dans le stockage.
     */
   public function store(Request $request)
{
    // 1️⃣ Validation des données envoyées
    $validated = $request->validate([
        'title'   => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    // 2️⃣ Génération du slug à partir du titre
    $validated['slug'] = Str::slug($request->title);

    // 3️⃣ Création de l'article dans la base de données
    Post::create($validated);

    // 4️⃣ Réponse JSON de confirmation
    return response()->json(['message' => 'Post créé avec succès !'], 201);
}


    /**
     *Affiche la ressource spécifiée.
     */
    public function show(string $id)
    {
        return new PostResource(Post::findOrFail($id));
    }

    /**
     * Mettre à jour la ressource spécifiée dans le stockage.
     */
    public function update(Request $request, string $id)
    {
           // 1️⃣ Validation des données envoyées
         $validated = $request->validate([
        'title'   => 'sometimes|required|string|max:255',
        'content' => 'sometimes|required|string',
    ]);

      $post = Post::findOrFail($id);
      if ($request->has('title')) {
          $validated['slug'] = Str::slug($request->title);
      }
        $post->update($validated);
        return response()->json(['message' => 'Post mis à jour avec succès !']);

    }

    /**
     * Supprimez la ressource spécifiée du stockage.
     */
     public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json(['message' => 'Post supprimé avec succès !']);
    }
}
