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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./exercice4.css" />
    <title>Exercice 4</title>
</head>

<body>
    <h1>Fiche de l'élève <?= $eleve['nom'] ?> <?= $eleve['prenom'] ?></h1>

    <h2>Information sur <?= $eleve['nom'] ?> <?= $eleve['prenom'] ?></h2>

    <dl>
        <dt>Age</dt>
        <dd><?= $eleve['age'] ?></dd>
        <dt>Classe</dt>
        <dd><?= $eleve['classe'] ?></dd>
    </dl>

    <h3>Professeur Principal</h3>

    <dl>
        <dt>Nom</dt>
        <dd><?= $eleve['profPrincipal']['nom'] ?></dd>
        <dt>Prénom</dt>
        <dd><?= $eleve['profPrincipal']['prenom'] ?></dd>
        <dt>Matière</dt>
        <dd><?= $eleve['profPrincipal']['matiere'] ?></dd>
    </dl>

    <h2>Notes</h2>

    <ul>
        <? foreach ($eleve['notes'] as $index => $note) : ?>
            <li class="<? if ($note > 15) : ?>green<? elseif ($note >= 10) : ?>orange<? else : ?>red<? endif ?>">Note n°<?= $index + 1 ?> : <?= $note ?></li>
        <? endforeach ?>
    </ul>
</body>

</html>
