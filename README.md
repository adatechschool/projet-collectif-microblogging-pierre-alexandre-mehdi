# <p align="center">Raclavel - site de microblogging dédié à la raclette 🧀</p>

Le projet consiste à développer une plateforme de *micro-blogging*, type Instagram, pour tout les amoureux du fromage fondu. 
Less utilisateurs peuvent :
- créer des posts associant une image et un texte,
- les retrouver regroupés au sein d’une page Wall personelle,
- voir les posts des autres membres sur leur Wall,
- voir touts les posts sur une page News,
- modifier leur profil (biographie et avatar) sur une page dédiée.
- supprimer un post ou même leur compte.

## Groupe de 3 personnes - 7 jours 💁‍♂️🙆‍♂️🙋‍♂️

[Mehdi GRIMAULT](https://www.linkedin.com/in/mehdi-grimault/) - [Alexandre TROUILLE](https://www.linkedin.com/in/alexandre-trouille/) - [Pierre GIRARD](https://www.linkedin.com/in/pierre-girard-468214246/)

## Aperçu du projet 🧐

*La page d'accueil du blog*

![App Screenshot](/public/images/image.png)

*La page de connexion du blog*

![App Screenshot](/public/images/image(1).png)

*La page News regroupant tout les posts*

![App Screenshot](/public/images/image(2).png)

*La page Wall regroupant les posts d'un utilisateur (et le formulaire de psot si connecté)*

![App Screenshot](/public/images/image(3).png)
![App Screenshot](/public/images/image(4).png)

*La page pour éditer le profil (biographie, photo profil, modification mot de passe, suppression compte)*

![App Screenshot](/public/images/image(5).png)
![App Screenshot](/public/images/image(6).png)
![App Screenshot](/public/images/image(7).png)


## Tech Stack 🛠️

- **Langages:** PHP, HTML, CSS, SQL
- **Framework / Library:** [Laravel](https://laravel.com/), [Tailwind CSS](https://tailwindcss.com/)
- **Database:** [PostgreSQL](https://www.postgresql.org/)
- **Environnement:** [Docker](https://www.docker.com/)

## Fonctionnalités ajoutées 📝

- [X] utilisation d'un framework full-stack (Laravel),
- [X] utilisation d'un framework CSS (Tailwind),
- [X] conception d'une base de données relationnelle (PostgreSQL),
- [X] page d'inscription et de connexion,
- [X] page Wall qui regroupe les posts de tous les utilisateurs,
- [X] page News qui regroupe tout les posts de tout les utilisateurs,
- [X] page de profil éditable avec informations utilisateur (avatar, biographie, mot de passe),
- [X] page utilisateur sur le même format que la page de profil mais non éditable,
- [X] formulaire de création de nouveaux posts associant une image et un texte,
- [X] gestion de l'authentification (via Laravel Breeze),
- [X] génération de fausses données (via DatabaseSeeder),
- [X] tests.


## Reste à implémenter ✏️

- [ ] ajout de commentaires et likes sous les posts (par les utilisateurs connectés),
- [ ] faire une fonctionnalité d'abonnement de personnes (ajout et suppresion des abonnements),
- [ ] création d'un feed personnel (page listant uniquement les posts des membres auxquels l’utilisateur est abonné).

## Prérequis ⚙️

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre système :

- **PHP:** Assurez-vous d'avoir PHP installé. Vous pouvez télécharger la dernière version sur [php.net](https://www.php.net/).
- **Composer:** Le gestionnaire de dépendances PHP. Si vous ne l'avez pas, suivez les instructions d'installation sur [getcomposer.org](https://getcomposer.org/).
- **Node.js et npm:** Nécessaires pour gérer les dépendances JavaScript. Téléchargez et installez-les à partir de [nodejs.org](https://nodejs.org/).
- **Docker:** Utilisé pour gérer l'environnement de développement. Téléchargez-le à partir de [docker.com](https://www.docker.com/).
- **PostgreSQL:** La base de données utilisée dans le projet. Vous pouvez l'installer depuis [postgresql.org](https://www.postgresql.org/).

Une fois que vous avez ces prérequis, vous êtes prêt à mettre en place et exécuter le projet.

## Lancement du projet 💻

Lancement serveur :

```bash
npm run dev
php artisan serve --port=8001
```

### Lancement des tests 🗳️

```bash
run php artisan test 
```

# <p align="center">🧀Merci d'avoir lu notre Readme ! N'hésitez pas à nous écrire pour en savoir plus !🧀</p>
