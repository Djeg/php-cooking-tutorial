<?php
/*
Nous savons que PHP est un langage de programmation. Il possède
un système d'instruction nous permettant de donner des ordres
à notre ordinateur.

Nous avons l'instruction qui permet d'afficher :

Exemple de echo :
*/
echo 'Bonjour'; // Afficher la chaine de caractère "Bonjour"
echo 25; // Afficher l'entier 25

/*
En php nous pouvons manipuler des données. Chaque donnée
possède un type :

- string : Permet de manipuler du text
- boolean : Permet de manipuler "vrai" ou "faux"
- int : Permet de manipuler des chiffres sans virgule (non flottant)
- float : Permet de maniuler des chiffres à virgule
*/
echo 'Test'; // Afficher la string "Test"
echo true; // Afficher le boolean "vrai"
echo 25; // Afficher le int 25 
echo 34.6; // Afficher le float 34.6 

/*
Chaque donnée peut être enregistrer dans la mémoire de votre ordinateur.
Cela nous permet de réutiliser, transformer et traiter nos données.

Pour cela php possède des variables :
*/
$nom = "Jean"; // Ici on enregistre un "nom" dans la mémoire

// Grace au variables nous pouvons réutiliser autant de fois
// que l'on veut sa valeur
echo $nom;

/*
PHP, comme tout les langages de programmation, c'est une véritable
calculatrice :

Avec des "int" ou des "float" nous pouvons utiliser des opérations numéraires :

"-" : Fais un soustraction
"+" : Fais une addition
"/" : Fais une division
"%" : Fais le reste d'une division
"*" : Fais une mutliplication
*/
$nombre1 = 10;
$nombre2 = 30;

echo $nombre1 - $nombre2;

/*
PHP possède la possibilité de "concatener" (assembler)
des chaines de caractère (string).

Pour assemble des string, nous utilisons le "."

Par exemple :
*/

echo 'Bonjour ' . $nom;

/*
PHP possède aussi la possibilité de "interpoller" des
chaines de caractères (string).

Graçe au guillemet double (""), php offre la possibilité d'interpréter
des variables à l'intérieur de chaines de caractères

Exemple :
*/

echo "Bonjour $nom";
