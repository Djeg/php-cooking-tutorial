<?
/*
PHP est souvent associé à une base de données. La plus célèbre est
"MySQL". 

Une base de données c'est comme un tableur excel, c'est une grande
armoire contenant des tables.

Ces tables contiennent des colonnes (les champs) et des lignes
(les entrées).

Afin d'utiliser une base de données en PHP il faut tout d'abord
se connécter.

Pour manipuler des bases de données PHP utilise un « objet » :
PDO.
*/

// Nous nous connéctons à notre base de données
$connection = new PDO(
    'mysql:host=db;dbname=cookme;charset=utf8',
    'root',
    'root',
);

/*
Graçe au langage SQL, il est possible de récupérer des données
de notre base de données :

Exemple séléctioner tout les users :

SELECT * FROM users;

Et bien en php, graçe à PDO nous pouvons facilement
lancer des requêtes et récuperer les résultat :
*/

// La première étape est de préparer la requête
$requete = $connection->prepare('SELECT * FROM users');

// La seconde étape est de lancer la requête
$requete->execute();

// On transforme notre résultat en tableaux php
$users = $requete->fetchAll();

// Nous récupérons un tableaux contenant chaque utilisateur
// sous forme de tableaux. C'est don un tableaux de tableaux

// Exemple afficher une balise h2 avec l'email de chaque
// utilisateur
foreach ($users as $user) {
    echo '<h3>' . $user['email'] . '</h3>';
}

/*
En php, graçe à mysql, nous pouvons aussi insérer
de nouveau résultat en utilisant les fonctions précédentes
et la requête SQL suivante :

INSERT INTO users (firstname, lastname, email, password, sexe, birthdate)
VALUES ('test', 'test', 'test@mail.com', 'test', 'homme', '1990-03-21')
*/

// On prépare la requête. Pour les requêtes sur plusieur vous
// pouvez utiliser les chaines de caractère HEREDOC :
$requete = $connection->prepare(<<<SQL
    INSERT INTO users (firstname, lastname, email, imageUrl, password, sexe, birthdate)
    VALUES ('test', 'test', 'test@mail.com', 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ffree-profile-pics.com%2Fprofile-pictures%2F01232014%2Fdownload%2Fmr-bean-profile-picture-180x180.png&f=1&nofb=1&ipt=bedc69dcbd46ceccc906b9ab7a3bb57641a67c7695f3acd155007483280df0c4&ipo=images', 'test', 'homme', '1990-03-21')
SQL);

// Il suffit d'éxécuter la requête pour lancer l'insertion :
$requete->execute();

/*
En régle générale, les données que nous insérons dans la base
de données viennent d'un formulaire.

Cela implique que les données sont stocké dans des variables.

Afin d'éviter TOUT PROBLEME DE SECURITE, PDO à créé un système
d'insertion de variable très puissant :
*/

// immaginons les variables suivantes :
$firstname = 'Jack';
$lastname = 'Doe';
$email = 'jack@mail.com';
$imageUrl = 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ffree-profile-pics.com%2Fprofile-pictures%2F01262014%2Fdownload%2Fwolf-profile-picture-180x180.png&f=1&nofb=1&ipt=b8ff28ae15e0aa213a1e476a12a0be21ec4677c83d021e5cb9a03ca339e572eb&ipo=images';
$password = 'jack';
$sexe = 'homme';
$birthdate = '1992-11-10';

// Afin d'insérer la moindre variable dans une base
// de données, il est obligatoire d'utiliser
// des paramètre SQL :
$requete = $connection->prepare(<<<SQL
    INSERT INTO users (firstname, lastname, email, imageUrl, password, sexe, birthdate)
    VALUES (?, ?, ?, ?, ?, ?)
SQL);

// Afin d'éviter l'injéction SQL, nous allons pouvoir
// passer les variables dans un tableaux lors de execute :
$request->execute([
    $firstname,
    $lastname,
    $email,
    $imageUrl,
    $password,
    $sexe,
    $birthdate,
]);

// Vous avez aussi la possibilité de remplacer les "?" par
// des paramètres nommées :
$requete = $connection->prepare(<<<SQL
    INSERT INTO users (firstname, lastname, email, imageUrl, password, sexe, birthdate)
    VALUES (:firstname, :lastname, :email, :imageUrl, :password, :sexe, :birthdate)
SQL);

// Afin d'éviter l'injéction SQL, nous allons pouvoir
// passer les variables dans un tableaux lors de execute :
$request->execute([
    'firstname' => $firstname,
    'lastname' => $lastname,
    'email' => $email,
    'imageUrl' => $imageUrl,
    'password' => $password,
    'sexe' => $sexe,
    'birthdate' => $birthdate,
]);

/*
ATTENTION :

Lorsque l'on demande des SELECT et que l'on doit passer une
variable dans notre SQL, nous devons aussi utiliser
les SQL :
*/
$limit = 2;

$requete = $connection->prepare('SELECT * FROM users LIMIT ?');
$requete->execute([$limit]);
$users2 = $request->fetchAll();
