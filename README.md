# API Laravel - Système de Gestion de Posts

Une API RESTful robuste construite avec Laravel pour la gestion de posts avec authentification utilisateur.

## 🚀 Démo

L'API est déployée et accessible à :
```
https://api-laravel-production-4098.up.railway.app/api
```

## ✨ Fonctionnalités

- 👤 Authentification complète (inscription, connexion)
- 🔒 Sécurité avec Laravel Sanctum
- 📝 CRUD complet pour les posts
- 📊 Pagination des résultats
- ✅ Validation des données
- 🔍 Documentation API détaillée

## 🛠️ Technologies Utilisées

- Laravel 10.x
- Laravel Sanctum pour l'authentification
- MySQL/PostgreSQL
- Railway.app pour le déploiement

## 📋 Prérequis

- PHP >= 8.1
- Composer
- MySQL ou PostgreSQL
- Git

## 🚀 Installation

1. Clonez le repository
```bash
git clone https://github.com/Harding10/api-laravel-
cd api-laravel-
```

2. Installez les dépendances
```bash
composer install
```

3. Configurez l'environnement
```bash
cp .env.example .env
php artisan key:generate
```

4. Configurez la base de données dans `.env`

5. Migrez la base de données
```bash
php artisan migrate
```

6. Lancez le serveur
```bash
php artisan serve
```

## 📚 Documentation API

La documentation complète de l'API est disponible dans le fichier [API_DOCUMENTATION.md](API_DOCUMENTATION.md).

### Points d'accès principaux :

- POST `/api/register` - Inscription
- POST `/api/login` - Connexion
- GET `/api/user` - Profil utilisateur
- GET `/api/posts` - Liste des posts
- POST `/api/posts` - Créer un post
- GET `/api/posts/{id}` - Détails d'un post
- PUT `/api/posts/{id}` - Modifier un post
- DELETE `/api/posts/{id}` - Supprimer un post

## 🧪 Tests

Pour lancer les tests :
```bash
php artisan test
```

## 🔐 Sécurité

- Protection CSRF
- Validation des entrées
- Authentification par token
- Gestion des autorisations

## 📝 License

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

## 👤 Auteur

- GitHub: [@Harding10](https://github.com/Harding10)

## 🤝 Contribution

Les contributions sont les bienvenues ! N'hésitez pas à ouvrir une issue ou soumettre une pull request.
