<!--
Dans un fichier "exercice3.php" ajouter le code
de l'exercice

Avec le tableaux suivant :
-->
<?php
$notes = [12, 8, 17, 3, 19, 6];
?>
<!--
Afficher dans une balise ul chaque note de l'éléve (en utilisant
une balise LI)

!indice! Une boucle est nescessaire
-->

<!--
Pour chaque notes de l'éléve, afficher
son numéro (1 pour la note 1, 2 pour la note 2 etc ...)
-->

<!--
Toujours en utilisant une balise ul et li, afficher uniquement
les notes au dessus ou égale à la moyenne !
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>
    <h1>Notes de l'éléve</h1>

    <ul>
        <!--
        En php il éxiste des "short open tag", des balises
        ouvrante et fermante plus simple à écrire :

        Par éxemple :
        <?php $test = 3; ?>

        C'est la même chose que :
        <? $test = 3; ?>
        -->

        <!--
        Lorsque l'on fais du php à l'intérieur d'un fichier
        html, on s'apercois que notre code PHP n'est pas facile à lire :

        <? foreach ($notes as $index => $note) { ?>
            <li>Note n°<?= $index ?> : <?= $note ?></li>
        <? } ?>

        Il éxiste une deuxième technique pour faire des conditions (if, else ...),
        des boucles (while, for, foreach ...).

        On nomme cette technique "template syntax", cela permet de rendre
        notre code beaucoup plus lisible lorsque l'on mélange PHP à du
        HTML
        -->

        <? foreach ($notes as $index => $note) : ?>
            <li>Note n°<?= $index + 1 ?> : <?= $note ?></li>
        <? endforeach ?>
    </ul>

    <ul>
        <? foreach ($notes as $index => $note) : ?>
            <? if ($note >= 10) : ?>
                <li>Note n°<?= $index + 1 ?> : <?= $note ?></li>
            <? endif ?>
        <? endforeach ?>
    </ul>
</body>

</html>
