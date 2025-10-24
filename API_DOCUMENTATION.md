# Documentation de l'API Laravel

Cette documentation décrit les endpoints disponibles dans l'API et comment les utiliser.

## Base URL

```
https://api-laravel-production-4098.up.railway.app/api
```

## Authentification

L'API utilise Laravel Sanctum pour l'authentification par token. Pour les routes protégées, vous devez inclure le token dans l'en-tête de vos requêtes :

```
Authorization: Bearer votre_token_ici
```

## Endpoints

### Authentification

#### Inscription
- **URL** : `/register`
- **Méthode** : `POST`
- **Auth requise** : Non
- **Corps de la requête** :
```json
{
    "name": "Votre Nom",
    "email": "votre@email.com",
    "password": "votre_mot_de_passe",
    "password_confirmation": "votre_mot_de_passe"
}
```
- **Réponse réussie** :
```json
{
    "user": {
        "id": 1,
        "name": "Votre Nom",
        "email": "votre@email.com",
        "created_at": "2025-10-24T..."
    },
    "token": "votre_token_d_acces"
}
```

#### Connexion
- **URL** : `/login`
- **Méthode** : `POST`
- **Auth requise** : Non
- **Corps de la requête** :
```json
{
    "email": "votre@email.com",
    "password": "votre_mot_de_passe"
}
```
- **Réponse réussie** :
```json
{
    "token": "votre_token_d_acces"
}
```

### Utilisateur

#### Obtenir le profil utilisateur
- **URL** : `/user`
- **Méthode** : `GET`
- **Auth requise** : Oui
- **En-têtes** :
```
Authorization: Bearer votre_token
```
- **Réponse réussie** :
```json
{
    "id": 1,
    "name": "Votre Nom",
    "email": "votre@email.com",
    "created_at": "2025-10-24T...",
    "updated_at": "2025-10-24T..."
}
```

### Posts

#### Liste des posts
- **URL** : `/posts`
- **Méthode** : `GET`
- **Auth requise** : Oui
- **En-têtes** :
```
Authorization: Bearer votre_token
```
- **Réponse réussie** :
```json
{
    "data": [
        {
            "id": 1,
            "title": "Titre du post",
            "content": "Contenu du post",
            "user_id": 1,
            "created_at": "2025-10-24T...",
            "updated_at": "2025-10-24T..."
        }
    ]
}
```

#### Créer un post
- **URL** : `/posts`
- **Méthode** : `POST`
- **Auth requise** : Oui
- **En-têtes** :
```
Authorization: Bearer votre_token
Content-Type: application/json
```
- **Corps de la requête** :
```json
{
    "title": "Titre du post",
    "content": "Contenu du post"
}
```
- **Réponse réussie** :
```json
{
    "data": {
        "id": 1,
        "title": "Titre du post",
        "content": "Contenu du post",
        "user_id": 1,
        "created_at": "2025-10-24T...",
        "updated_at": "2025-10-24T..."
    }
}
```

#### Détails d'un post
- **URL** : `/posts/{id}`
- **Méthode** : `GET`
- **Auth requise** : Oui
- **En-têtes** :
```
Authorization: Bearer votre_token
```
- **Réponse réussie** :
```json
{
    "data": {
        "id": 1,
        "title": "Titre du post",
        "content": "Contenu du post",
        "user_id": 1,
        "created_at": "2025-10-24T...",
        "updated_at": "2025-10-24T..."
    }
}
```

#### Modifier un post
- **URL** : `/posts/{id}`
- **Méthode** : `PUT`
- **Auth requise** : Oui
- **En-têtes** :
```
Authorization: Bearer votre_token
Content-Type: application/json
```
- **Corps de la requête** :
```json
{
    "title": "Nouveau titre",
    "content": "Nouveau contenu"
}
```
- **Réponse réussie** :
```json
{
    "data": {
        "id": 1,
        "title": "Nouveau titre",
        "content": "Nouveau contenu",
        "user_id": 1,
        "created_at": "2025-10-24T...",
        "updated_at": "2025-10-24T..."
    }
}
```

#### Supprimer un post
- **URL** : `/posts/{id}`
- **Méthode** : `DELETE`
- **Auth requise** : Oui
- **En-têtes** :
```
Authorization: Bearer votre_token
```
- **Réponse réussie** :
```json
{
    "message": "Post supprimé avec succès"
}
```

## Codes de réponse

- `200` : Requête réussie
- `201` : Ressource créée avec succès
- `400` : Requête invalide
- `401` : Non authentifié
- `403` : Non autorisé
- `404` : Ressource non trouvée
- `422` : Erreur de validation
- `500` : Erreur serveur

## Gestion des erreurs

En cas d'erreur, l'API retournera une réponse JSON avec un message d'erreur :

```json
{
    "message": "Description de l'erreur",
    "errors": {
        "champ": [
            "Message d'erreur pour ce champ"
        ]
    }
}
```

## Pagination

Les listes de ressources (comme la liste des posts) sont paginées par défaut avec 15 éléments par page. Vous pouvez spécifier la page souhaitée avec le paramètre `page` :

```
GET /api/posts?page=2
```

## Tests avec Postman/Insomnia

1. Créez un compte avec l'endpoint `/register`
2. Connectez-vous avec `/login` pour obtenir un token
3. Ajoutez le token dans les en-têtes de vos requêtes suivantes
4. Vous pouvez maintenant accéder aux endpoints protégés

## Support

Pour toute question ou problème, veuillez ouvrir une issue sur le dépôt GitHub : https://github.com/Harding10/api-laravel-