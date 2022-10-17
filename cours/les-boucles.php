<?php
/*
Les boucles permettent de répéter du code autant de fois
que l'on désire.

Il éxiste en php 3 types de boucles :

- La boucle while
- La boucle for
- La boucle foreach
*/

/*
La boucle while

Cette boucle permet d'éxécuter du code autant de fois
que nescessaire en fonction d'une condition !!

Exemple :
*/
$compteur = 0;

while ($compteur < 10) {
    echo "<p>Le compteur est a $compteur</p>";

    $compteur = $compteur + 1;
}

/*
La boucle for 

Cette boucle permet de créer une "itération".

Le principe est simple, éxécuter du code autant
de fois qu'on le désire
*/
for ($i = 0; $i < 10; $i++) {
    echo "<p>Je boucle $i de fois</p>";
}

/*
La boucle foreach

PHP met à disposition une boucle spécialement conçu pour
Travailler avec des tableaux.

Cette boucle permet de lancer du code sur chaque élément
d'un tableaux.

Cela fonctionne sur les tableaux indéxé (numéroté) mais
sur les tableaux associatif.

Exemple :
*/
$notes = [12, 5, 8, 19, 16];


foreach ($notes as $note) {
    echo "<p>La note $note</p>";
}

foreach ($notes as $index => $note) {
    echo "<p>La note n°$index est $note</p>";
}

$eleve = [
    'nom' => 'Doe',
    'prenom' => 'John',
    'age' => 17,
    'classe' => 'Terminal',
];

foreach ($eleve as $clef => $valeur) {
    echo "<p>La clefs $clef de l'éléve contient $valeur</p>";
}
