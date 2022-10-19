<?
/*
Une url est composé de différent membre

https://monsite.com/recette.php?id=5
  |           |          |        |
  |           |          |        |
protocole     |          |        |
              |          |        |
        nom de domaine   |        |
                      resource    |
                             Query String

Graçe au Query String, il est possible de passer des
données de page en page.

Par exemple sur un page d'accueil, nous pourions générer
le lien suivant :

/recette.php?id=5

En cliquant sur ce lien, nous demandons à afficher la page
recette.php et nous spécifions la recette que nous souhaitons
afficher (id=5).

Les Query String sont formatté ainsi :

    ?id=5&email=john@mail.com
    |    |   |        |
    |    |   |        |
  Demarre|  nom       |
    la   |          Valeur
   Query |
         |
    Sépare les
       query


Il est possible de récupérer ces paramètres dans un
script php en utilisant la super global $_GET 
*/

// Exemple, récupération de l'id passé en query string
$id = $_GET['id'];


/*
ATTENTION !!!!

Les urls peuvent être modifié par un pirate méchant malveillant !

- Donc il est déconseillé de transmettre des données sensible (exemple
un mot de passe)
- Rien ne nous assure la cohérence de la données dans votre script
  php (ex /recette.php?id=<a href="">sdlfsd</a>)

C'est pourquoi il faut absolument tester et s'assurer que les données
query string sont correct.

Pour cela il éxiste 2 fonctions php incontournable :

- isset : Permet de savoir si un paramètre éxiste
- filter_var : Permet de s'assurer que la données soit cohérente.
*/

// Imaginons que je soit sur la page : /recette.php?id=3
$id = $_GET['id']; // $id = 3

// Attention, si je suis sur la page : /recette.php
$id = $_GET['id']; // PHP ERROR !!!!!!!

// Pour éviter les erreur il suffit de tester l'éxistence de cette id :
if (isset($_GET['id'])) { // vrai si l'id éxiste et faux sinon
    // on S'assure que l'id soit un entier,
    // ici soit la variable contiendra l'entier de l'id,
    // ou alors le boolean false
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

    // Ici je sais que mon identifiant n'est pas correct
    if ($id === false) {
    }
} else {
    // On pourrais renvoyer à l'accueil
    // Ou alors afficher une page 404
    // etc ....
}

/*
La fonction filter est extrémement puissante,
elle permet de s'assurer de la cohérence de beaucoup de données :
*/

// Nous pouvons filtrer des entiers

filter_var('44', FILTER_VALIDATE_INT); // Retourne : int 44
filter_var('44.872', FILTER_VALIDATE_INT); // Retourne : int 44
filter_var('coucou les amis', FILTER_VALIDATE_INT); // Retourne : false
filter_var('67.827', FILTER_VALIDATE_FLOAT); // Retourne : float 67.827

// Nous pouvons aussi valider des url et email
filter_var('http://test.com', FILTER_VALIDATE_URL); // Retourne : string http://test.com
filter_var('<p>ldkfhsdklfhsdl</p>', FILTER_VALIDATE_URL); // Retourne : false
filter_var('test', FILTER_VALIDATE_EMAIL); // Retourne : false

// Nous pouvons aussi "échapper le html"
filter_var('<p>Coucou les amis</p>', FILTER_SANITIZE_FULL_SPECIAL_CHARS); // Retourne : string &nbsp;p&nbsp;
