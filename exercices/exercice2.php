<!--
Créer une fichier "exercice2.php" et placer le code
de l'exercice.

Avec le tableaux suivant :
-->
<?php
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'John',
    'age' => 17,
    'classe' => 'Terminal',
];
?>
<!--
Dans une balise h1 afficher le nom et le prenom de l'éléve

Ensuite dans une balise h3 afficher l'age de l'éléve

Pour finir dans une balise p afficher la classe de l'éléve
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>
    <!-- 
    En php il éxiste des "short open tag", des balises ouvrante
    et fermante php plus simple à écrire.

    Par éxemple au lieu d'écrire :
    <?php echo 'test'; ?>

    Vous pouvez écrire simplement :
    <?= 'test' ?>
    -->

    <h1><?= $eleve['nom'] ?> <?= $eleve['prenom'] ?></h1>
    <h3>Age : <?= $eleve['age'] ?></h3>
    <p>Classe : <?= $eleve['classe'] ?></p>
</body>

</html>
