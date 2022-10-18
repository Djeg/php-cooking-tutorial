<?php
/*
Comme beaucoup d'autres langage de programmation,
php possède un systèm de réutilisation de code :

LES FONCTIONS.

Ce sont des boites contenant du code isolé acceptant
des paramètres et retournant un valeur

Paramètres                 Retour
   |                         |
   |                         |
1 ---> |---------------|
       |  additionner  | ---> 3
2 ---> |---------------|

En php il éxiste des milliers de fonctions permettant
de faire diverse choses.

Par éxemple, la fonction "echo". Cette fonction affiche
quelque chose dans notre page !

Ou bien la fonction "array_pop" qui supprime le dernière
élément d'un tableaux.

L'intégralité des fonctions de php sont disponible
sur le site de la documentation officiel :

https://www.php.net/manual/fr/funcref.php


Voici une petit liste de fonctions très utilisées
en php :
*/

/* Les fonctions permettant de manipuler du texte */

// Retourne le nombre de character à l'intérieur de mon text
strlen('coucou'); // 6

// Permet de remplacer des bout de character dans du text
str_replace('copains', 'amis', 'Coucou les copains'); // Coucou les amis

// Il éxiste une fonction permettant de faire des concatenation.
// En utilisant cette fonction, les concatenation seront :
// - Bien plus performante
// - Sécurisé (on ne peus pas concatener n'importe quoi)
// - Très puissantes
sprintf('Coucou %s, vous avez %d ans', 'John', 32);

/* Les fonctions manipulant les dates */

// Cette fonction permet de récupérer la date du jour,
// elle accépte un paramètre :
// un chaine de caractère spécifiant l'élement de
// la date que l'on veut récupérer :
// - d (permet de récupérer le jour)
// - Y (permet de récupérer l'annèe)
// - m (permet de récupérer le mois)
// - H (permet de récupérer l'heure)
// - i (permet de récupérer les minutes)

echo '<p>' . date('d-m-Y à H:i') . '</p>';
echo '<p>' . date('Y') . '</p>';

/*
Il est possible de créer nos propre fonctions. Cela 
permet de réutiliser du code sans avoir à le copier / coller.

Généralement lorsque nous avons une opération un peu complexe,
ou une opération qui se répéte dans notre code, il est conseillé
de créer une fonction :).

Par éxemple, essayons de créer une fonction qui additionne
2 nombre :
*/

// Nous pouvons typer nos paramètres :
// - int (entier)
// - float (décimaux)
// - string (text)
// - array (tableaux)
// - boolean (vrai ou faux)
function additionner(int $x, int $y): int
{
    $resultat = $x + $y;

    return $resultat;
}


echo additionner('10', 4);

/*
Le résultat (le retour d'une fonction) peut-être récupérer
dans une variable :
*/
$a = additionner(10, 4); // 14
$b = additionner($a, 2); // 16
$c = additionner($a, $b); // 14 + 16 = 30

echo $c; // Affiche : 30
