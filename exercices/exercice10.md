# Utiliser une base de données

## 1. Téléchargez et installer la base de données

1. Tout d'abord télécharger le fichier [cookme](../cookme.sql) (Ensuite clicker sur "Raw" >> Click droits : Enregistrer Sous)
2. Insérer ce fichier dans votre base de données en utilisant
   phpmyadmin (Importer >> Choisir un fichier >> Executer).

## 2. Remplacer les utilisateurs

1. Dans le fichier "src/includes/users.php" créer une fonction
   "fetchAll" qui utilise PDO et retourne tout les utilisateurs
   de la base de données.
2. Utiliser cette fonction dans la page "connexion.traitement.php"

> Aide : Séléctionne tout les users
>
> ```sql
> SELECT * FROM users;
> ```

## 3. Remplacer les recettes

1. Dans le fichier "src/includes/recettes.php" créer une fonction
   "fetchAll" qui utilise PDO et retourne toutes les recettes
   de la base de données
2. Utiliser cette fonction dans les page "index.php", "populaires.php",
   "recette.php"

> Aide : Séléctionne toute les recettes
>
> ```sql
> SELECT * FROM recettes;
> ```

## 4. Inscription d'un nouvel utilisateur

1. Créer une page "inscription.php" (avec un lien dans le menu). Cette
   page doit afficher le formulaire suivant :
    - nom
    - prenom
    - email
    - password
    - imageUrl
    - sexe
    - date de naissance
2. Créer une page "inscription.traitement.php" pour traiter l'envoie du
   formulaire. Cette page doit vérifier les données post et utiliser
   la base de données afin d'enregistrer un nouvel utilisateur.

> Aide : Insére une nouvel recette
>
> ```sql
> INSERT INTO user
> (lastname, firstname, email, password, imageUrl, sexe, birthdate)
> VALUES (?, ?, ?, ?, ?, ?, ?)
> ```

## 5. Créer une page pour insérer de nouvelle recette

1. Dans la page nouvelleRecette.php afficher le formulaire suivant :

-   titre
-   description
-   image
-   difficulté
-   prix
-   autheur

2. Créer la page "nouvelleRecette.traitement.php" et insérer
   la recette dans la base de données (le champs "active" doit être vrai : true).

3. Faire en sorte de rendre cette page de création de recette uniquement
   accessible aux utilisateurs connécté.

> Aide : Insére une nouvel recette
>
> ```sql
> INSERT INTO recettes
> (title, description, image, difficulty, price, active, author)
> VALUES (?, ?, ?, ?, ?, ?, ?)
> ```
