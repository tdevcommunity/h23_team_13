# h23_team_13

Repertoire pour le hacktoberfest Lome de l'équipe 13.

## Projet 3 - Plateforme de Gestion des Membres de TDEV

![Insérer ici un logo ou une capture d'écran de votre application si disponible.](https://ourtdev.com/wp-content/uploads/2023/06/TDEV-LOGO-1536x668.png)


## Description
Le projet vise à concevoir et à développer une plateforme en ligne pour la gestion des membres de TDEV. Cette plateforme facilitera l'inscription des membres, permettra l'ajout et l'évaluation de leurs CV, et donnera des recommandations pour l'amélioration des CV sur la base de critères spécifiques.

## Objectifs principaux
- Faciliter l'inscription et la gestion des membres de TDEV.
- Cataloguer et évaluer les compétences des membres.
- Offrir des recommandations pour l'amélioration des profils.

## Technologies utilisées
- Front-end : Nuxt.js
- Back-end : Laravel
- [Listez ici toutes les autres technologies clés que vous avez utilisées.]

## Installation

### Front-end (Nuxt.js)
1. Clonez le projet depuis GitHub :
    ```bash
    git clone https://github.com/tdevcommunity/h23_team_13.git
    cd h23_team_13
    ```

2. Accédez au répertoire du front-end :
    ```bash
    cd frontend
    ```

3. Installez les dépendances nécessaires avec npm :
    ```bash
    npm install
    ```

### Back-end (Laravel)
1. Assurez-vous d'être toujours dans le répertoire du projet h23_team_13.

2. Accédez au répertoire du back-end :
    ```bash
    cd backend
    ```

3. Installez les dépendances PHP avec Composer :
    ```bash
    composer install
    ```

## Configuration
Comment configurer le projet ? Voici les informations sur les fichiers de configuration, les variables d'environnement, etc.

```bash
# Configuration front-end (Nuxt.js)
cd frontend
cp .env.example .env
# Modifier les variables d'environnement au besoin

# Configuration back-end (Laravel)
cd backend
cp .env.example .env
# Modifier les variables d'environnement au besoin
php artisan key:generate
php artisan migrate
php artisan serve

```



## Utilisation

Une fois que votre application est installée et configurée, voici comment l'utiliser :

1. **Lancez le front-end (Nuxt.js) :**
   - Assurez-vous d'être dans le répertoire du front-end :
     ```bash
     cd frontend
     ```
   - Démarrez le serveur de développement :
     ```bash
     npm run dev
     ```
   - Accédez à l'application dans votre navigateur à l'adresse `http://localhost:3000`.

2. **Lancez le back-end (Laravel) :**
   - Assurez-vous d'être dans le répertoire du back-end :
     ```bash
     cd backend
     ```
   - Démarrez le serveur Laravel :
     ```bash
     php artisan serve
     ```
   - Votre back-end sera disponible à l'adresse `http://localhost:8000`.

3. Vous pouvez maintenant utiliser l'application en interagissant avec l'interface front-end et en utilisant les fonctionnalités de gestion des membres et d'évaluation de CV.

## Captures d'écran de l'Interface Utilisateur
![Capture d'écran](./reg1.png)
![Capture d'écran](reg2.png)
![Capture d'écran](log.png)
![Capture d'écran](screenshot.png)
![Capture d'écran](screenshot.png)
![Capture d'écran](screenshot.png)
![Capture d'écran](screenshot.png)
![Capture d'écran]([screenshot.png](https://github.com/tdevcommunity/h23_team_13/blob/main/dashb.PNG))



## Contributions

Nous accueillons les contributions de la communauté pour améliorer ce projet. Voici comment vous pouvez contribuer :

- Signalez des problèmes ou des bogues en créant une nouvelle issue sur GitHub.
- Proposez des améliorations ou de nouvelles fonctionnalités en créant une nouvelle demande de fonctionnalité sur GitHub.
- Soumettez des pull requests pour corriger des problèmes ou mettre en œuvre de nouvelles fonctionnalités.

Veuillez consulter notre [guide de contribution](CONTRIBUTING.md) pour plus de détails sur la manière de contribuer à ce projet.

## Licence

Ce projet est sous licence MIT. Vous pouvez consulter le fichier [LICENSE](LICENSE) pour plus de détails sur les termes de la licence.

## Remerciements

Nous aimerions exprimer notre gratitude envers les contributeurs de ce projet, ainsi qu'envers les projets open source et les ressources qui ont rendu cela possible.

