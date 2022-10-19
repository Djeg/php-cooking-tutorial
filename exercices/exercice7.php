<?
/*
Créer une page "connexion.php".

Cette page doit afficher un formulaire avec les champs suivant :

    - un champ email
    - un champ mot de passe
    - un bouton d'envoie

Ce formulaire doit s'envoyer en utilisant la méthode POST.

Créer un fichier "connexion.traitement.php", faire en
sorte que le formulaire s'envoie sur ce fichier (connexion.traitement.php).

En utilisant le tablaux d'utilisateur un peu plus bas,
afficher "Bienvenue {nom} {prenom}" si l'email et le mot
de passe fournie dans le formulaire corresponde à un utilisateur.

Si l'email ou le mot de passe de corresponde pas, afficher la page
"connexion.erreur.php" (Mettre ce que vous souhaitez à l'intérieur).

Voici le tableaux contenant les utilisateurs :
*/
$utilisateurs = [
    [
        'id' => 1,
        'email' => 'user1@mail.com',
        'password' => 'user1',
        'nom' => 'Dupont',
        'prenom' => 'Jean',
    ],
    [
        'id' => 2,
        'email' => 'john@mail.com',
        'password' => 'john.doe',
        'nom' => 'Doe',
        'prenom' => 'John',
    ],
    [
        'id' => 3,
        'email' => 'jane@mail.com',
        'password' => 'jane.doe',
        'nom' => 'Doe',
        'prenom' => 'Jane',
    ],
];
