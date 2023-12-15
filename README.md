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
![App Screenshot](/public/images/image.png){:width="150px"}

*La page de connexion du blog*
![App Screenshot](/public/images/image(1).png){:width="150px"}

*La page News regroupant tout les posts*
![App Screenshot](/public/images/image(2).png){:width="150px"}

*La page Wall regroupant les posts d'un utilisateur (et le formulaire de psot si connecté)*
![App Screenshot](/public/images/image(3).png){:width="150px"}
![App Screenshot](/public/images/image(4).png){:width="150px"}

*La page pour éditer le profil (biographie, photo profil, modification mot de passe, suppression compte)*
![App Screenshot](/public/images/image(5).png){:width="150px"}
![App Screenshot](/public/images/image(6).png){:width="150px"}
![App Screenshot](/public/images/image(7).png){:width="150px"}


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
- [ ] création d'un feed personnel (page listant uniquement les posts des membres auxquels l’utilisateur est abonné),

## Lancement du projet 💻

Lancement serveur :

```bash
php artisan serve --port=8001
```

### Lancement des tests 🗳️

```bash
run php artisan test 
```

# <p align="center">🧀Merci d'avoir lu notre Readme ! N'hésitez pas à nous écrire pour en savoir plus !🧀</p>