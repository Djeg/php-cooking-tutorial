<?
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

// Création de la fonction fetchAllUsers
function fetchAllUsers()
{
    // Connexion à la base de données
    $connection = new PDO(
        'mysql:host=db;dbname=cookme;charset=utf8',
        'root',
        'root',
    );

    // Préparation de la requête SQL
    $request = $connection->prepare('SELECT * FROM users');

    // Lancement de la requête
    $request->execute();

    // On transforme le resultat en tableaux php
    $users = $request->fetchAll();

    // On retourne les users pour pouvoir les utiliser
    // à l'éxtérieur de la fonction
    return $users;
}

// Créé un utilisateur en envoyant un tableaux
// avec toutes les données
function createNewUser(array $user)
{
    if (
        !isset($user['firstname'])
        || !isset($user['lastname'])
        || !isset($user['email'])
        || !isset($user['password'])
        || !isset($user['imageUrl'])
        || !isset($user['sexe'])
        || !isset($user['birthdate'])
    ) {
        return false;
    }

    // Connexion à la base de données
    $connection = new PDO(
        'mysql:host=db;dbname=cookme;charset=utf8',
        'root',
        'root',
    );

    // Préparation de la requête SQL
    $request = $connection->prepare(<<<SQL
        INSERT INTO users (firstname, lastname, email, password, imageUrl, sexe, birthdate)
        VALUES (:firstname, :lastname, :email, :password, :imageUrl, :sexe, :birthdate)
    SQL);

    // Lancement de la requête
    $request->execute($user);

    // Récupération du dernier identifiant
    $id = (int)$connection->lastInsertId();


    // Récupération de l'utilisateur
    $request = $connection->prepare(<<<SQL
        SELECT * FROM users
        WHERE id = :id
    SQL);

    // Ajout du paramètre id
    $request->bindParam('id', $id, PDO::PARAM_INT);

    // Execution de la requête
    $request->execute();

    // Récupération de l'utilisateur
    return $request->fetch();
}
