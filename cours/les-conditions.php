<?php
/*
Comme la plupart des langages de programmation,
il est possible de réaliser des conditions.

Ces conditions permettent d'éxécuter du code on fonction
de certaines données.

Exemple :
*/
$age = 19;

if ($age >= 18) {
    echo 'Vous êtes majeur';
} elseif ($age < 6) {
    echo 'Vous êtes un enfant';
} else {
    echo 'Vous êtes mineur';
}

/*
Les conditions utilisent des expression boolean. Ces dernières possède
des opérateurs de comparaison :

"==" : est égale a
"!=" : n'est pas égale à
"===" : est identique à
"!==" : n'est pas identique à
">" : Est supérieur
">=" : Est supérieur ou égale
"<" : Est inférieur
"<=" : Est inférieur ou égale

*/

if ($age == '19') {
    echo 'Vrai';
}

if ($age === '19') {
    echo 'Faux';
}

/*
Toujours dans ces même expressions, nous pouvons utiliser
des opérateur logique :

"&&" : ET
"||" : OU
"!" : NON
*/

if ($age >= 12 && $age <= 18) {
    echo 'Vous êtes adolescent';
}

/*
En php, il éxsiste une autre forme de "condition", c'est
la "switch".

Cette forme est un peu particulière, elle permet de
tester les valeurs d'une variables et d'éxécuter du code
en conséquence.

Exemple :
*/
$surname = "Johny";

switch ($surname) {
    case 'Domi':
        echo 'Yo Domi !';
        break;
    case 'LouLou':
        echo 'Hello LouLou';
        break;
    case 'Johny':
        echo 'Johny !!!!!';
        break;
    default:
        echo 'Bonjour ' . $surname;
}
