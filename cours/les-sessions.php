<?
/*
Il éxiste en php, un moyen de concerver les données
d'une page à une autre sans utilisé les données
GET ou POST.

Ce moyen, c'est la SESSION. Un session correspond à un
visiteur de votre site internet.

Afin d'utiliser les session en php, il faut absolument
commencer notre script PHP par l'appel de la fonction :

session_start();

!! ATTENTION !! Cette fonction "session_start()" doit
ABSOLUMENT être la TOUTE PREMIERE LIGNE de votre script !!!

Graçe à cette fonction "session_start()", nous avons accés
à une superglobal : $_SESSION.
*/
session_start();

// J'enregistre une information dans la session
$_SESSION['user'] = 'john@mail.com';

// Je récupére le user de la session :
$user = $_SESSION['user'];

/*
Graçe au session nous pouvons conserver des informations
entre nos différent scripts php (nos différentes pages).

ATTENTION !!!!
QUELQUES RÈGLES DE SÉCURITÉ :

- Il est fortement déconseillé d'enregistrer autre chose
  qu'une données dite "scalaire" (boolean, int, float, string sont
  valide mais attention array, object, null ... ne sont pas valide !!)
- n'enregistrer JAMAIS de HTML dans la session !!!!!!!!

Il est possible de "détruire" toutes les données enregistré dans la
session :

session_destroy();

Cette fonction est par exemple utilisé lors de la déconnexion.
*/
