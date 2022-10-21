<?
/*
Il éxiste une autre technique pour conserver des informations
entre vos page que la SESSION.

Cette technique est plus puissante car l'on peut sécuriser
et maitriser son éxistence.

Ce sont les COOKIES (pas les gateaux ...), des petits fichiers
text enregistré sur votre navigateur et accessible en php.

Ces fichiers text contiennent différente informations :

    - name : Le nom du fichier text
    - valeur : Ce que contient le fichier text
    - secure : Est-ce que le cookie est crypter
    - httpOnly : Permet de rendre le cookie ilisible en javascript.
    - expires : Détermine sa date d'expiration

La date d'expiration (expires) est exprimé graçe à
un "timestamp". Un "timestamp" c'est le nombre de seconde
écoulé depuis le 1er janvier 1970.

Nous pouvons obtenir le timestamp actuel avec les fonction
php "time()".

Il est donc possible de faire en sorte que notre cookie expire
dans 24h :

time() + 24 * 3600

Exemple un cookie qui éxpire un an plus tard :

time() + 365 * 24 * 3600

Pour créer un cookie en php, rien de plus simple :
*/
setcookie('userEmail', 'john@mail.com', [
    'httpOnly' => true,
    'secure' => true,
    'expires' => time() + 90 * 24 * 3600,
]);
$_COOKIE['userEmail'] = 'john@mail.com';
/*
!!! TRES TRES TRES IMPORTANT !!!

1. Les cookies ne peuvent enregistré QUE DES INFORMATIONS TEXTUELLE (string)
2. NE JAMAIS METTRE DE CODE HTML DANS LES COOKIES !!! (faille XSS)
3. Même si les cookies peuvent être créé avec PHP, rien n'empéche un méchant
   pirate de le modifier sur son navigateur !!!
*/

/*
Il est possible de récupérer à N IMPORTE QUEL MOMENT un cookie :
*/
$email = $_COOKIE['userEmail']; // string john@mail.com

/*
Il est possible de modifier un cookie en répétant la même opération
que la création.

Pour supprimer un cookie, il suffit d'appeler "setcookie" et de lui
spécifier une date d'expiration entérieur à aujourd'huie :
*/
setcookie('userEmail', '', [
    'expires' => 1,
]);

/*
Attention, le fais de supprimer un cookie avec setcookie ne supprime
pas le cookie dans la superglobal :
*/
$_COOKIE['userEmail']; // string john@mail.com

/*
Pour totalement supprimer un cookie, il faut aussi "unset"
le cookie lui même :
*/
unset($_COOKIE['userEmail']);
