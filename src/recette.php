<?php

// On inclue les recettes
include('./includes/recettes.php');

// On s'assure qu'un identifiant à bien été envoyé
// dans l'url
if (!isset($_GET['id'])) {
    // Rediriger l'utilisateur sur la page d'accueil
    header('Location: ./index.php');
    // Je termine mon script php
    die();
}

// On récupére l'identifiant on s'assurant
// que ce soit un entier
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

// Je récupére un tableaux contenant tout les identifiants
// de mes recettes
$recette = fetchOneRecipe($id);

// Je m'assure que mon id soit correct et qu'il correspond
// à une recette
if (!$recette) {
    // Rediriger l'utilisateur sur la page d'accueil
    header('Location: ./index.php');
    // Je termine mon script php
    die();
}

// On affiche la page
$pageTitle = $recette['title'];
include('./includes/pageStart.php');
include('./includes/header.php');
?>

<main class="content">
    <h1><?= $recette['title'] ?></h1>
    <p><?= $recette['description'] ?></p>
    <p>
        Like : <?= $recette['likes'] ?>
        <br />
        Difficulté : <?= $recette['difficulty'] ?>
    </p>
    <h3>Par <?= $recette['author'] ?></h3>
</main>

<? include('./includes/footer.php') ?>
<? include('./includes/pageStop.php') ?>
