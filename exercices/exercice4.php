<!--
Créé un fichier 'exercice4.php" et placé le code
de l'exerice suivant :

Avec le tableaux suivant :
-->
<?php
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'John',
    'age' => 18,
    'profPrincipal' => [
        'nom' => 'Doe',
        'prenom' => 'Jane',
        'matiere' => 'Français',
    ],
    'notes' => [16, 10, 12, 8, 7, 9],
    'classe' => 'Terminal',
]
?>
<!--
Afficher dans une balise h1 :
Fiche de l'éléve (nom) (prenom)

Afficher dans une balise h2 "Information sur (nom) (prenom)"

À la suite, en utilisant les balises html dd, dt, dl Afficher
l'age et la class de l'éléve

Afficher à la suite une balise h3 "Professeur principal"

À la suite, à l'aide des balises dd, dt, dl afficher
le nom, prenom et matiere du professeur principal.

Afficher ensuite dans une balise h2 "Notes"

À la suite, en utilisant une boucle et une balise ul,
afficher toutes les notes de l'éléve.

BONUS :
- Mettre la note en vert si au dessus de 15
- Mettre la note en orange si entre 10 et 15
- Mettre la note en rouge si en dessous de 10

Indice, vous pouvez créer et attacher une feuille de style css
de la même manière que en HTML :)
-->
