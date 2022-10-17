<?php
/*
En PHP, comme beaucoup d'autres langage de programmation,
il éxiste une notion que l'on appel les tableaux (array).

Les tableaux permettent d'enregistrer plusieurs données
de manière ordonné.

Il éxiste en PHP 2 sortes de tableaux :
- Les tableaux indéxé (indexed array)
- Les tableaux associatif (assosiativ array)
*/

/*
Les tableaux indéxé

Se sont des listes numéroté de 0 à X contenant de la données
à chaque index.

Exemple :
*/
$notes = [12, 8, 16, 14, 7, 12];

/*
Grace au tableaux il est possible d'accèder à un élément
précis de la liste en utilisant son index

!ATTENTION! Les index commence à partir de 0
*/
echo $notes[2]; // on affiche la note avec l'index 2 (note numéro 3) donc 16

/*
Il est possible d'ajouter une valeur à un tableaux

Exemple, on ajoute la note 2
*/
$notes[] = 2;
array_push($notes, 2);

/*
Il est possible de supprimer le dernier èlèment d'un tableaux

Exemple :
*/
array_pop($notes);

/*
Il est possible d'ajouter une valeur au début du tableaux

Exemple :
*/
array_unshift($notes, 10);

/*
Il est possible de supprimer le premier élément d'un tableaux

Exemple :
*/
array_shift($notes);

/*
Il éxsite des tableaux dit associatif.

Ils se comporte non plus comme des listes, mais plutôt
comme un dictionnaire.

Se sont des tableaux qui ne sont plus numéroté mais
associé à un clefs (key, ou mot de définition).

Exemple :
*/
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'John',
    'age' => 17,
];

/*
Nous pouvons facilement accéder à un élément précis
de notre tableaux en demandant un clef :
*/
echo $eleve['nom']; // Affiche : Doe

/*
Nous pouvons ajouter un élément à notre tableaux
*/
$eleve['classe'] = 'Terminal';

/*
Il est possible de savoir si une clefs éxiste dans un
tableaux associatif
*/
array_key_exists('nom', $eleve); // Ici retourne : vrai (true)
array_key_exists('profPrincipal', $eleve); // Ici retourne : faux (false)

/*
Il est possible de fusioner des tableaux
*/
$notes2 = [5, 19, 18];

$notes3 = array_merge($notes, $notes2);

/*
Travailler avec des tableaux peut être difficile. Afin
da faciliter le travail, php met à disposition une fonction
permettant d'afficher un tableaux à l'écran.

Ainsi il est plus simple de savoir ce que contient notre tableaux
*/
print_r($notes3);

/*
Très similaire au "print_r", il éxsiste une fonction
plus puissante :
*/
var_dump($eleve);

/*
Il est possible de tester si un élément est présent dans un tableaux
*/
in_array(20, $notes); // Ici retourne : faux (false)
in_array(12, $notes); // Ici retourne : vrai (true)
