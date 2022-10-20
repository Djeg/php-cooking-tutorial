<?php

session_start();

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
$recetteIds = array_column($recettes, 'id');

// Je m'assure que mon id soit correct et qu'il correspond
// à une recette
if ($id === false || !in_array($id, $recetteIds)) {
    // Rediriger l'utilisateur sur la page d'accueil
    header('Location: ./index.php');
    // Je termine mon script php
    die();
}

// Je récupére l'index correspondant à l'identifiant
// dans le tableaux d'identifiant de recette
$index = array_search($id, $recetteIds);

// On récupére la recette
$recette = $recettes[$index];

// On affiche la page
$pageTitle = $recette['intitulé'];
include('./includes/pageStart.php');
include('./includes/header.php');
?>

<main class="content">
    <h1><?= $recette['intitulé'] ?></h1>
    <p><?= $recette['description'] ?></p>
    <p>
        Like : <?= $recette['likes'] ?>
        <br />
        Difficulté : <?= $recette['difficulte'] ?>
    </p>
    <h3>Par <?= $recette['auteur']['prenom'] ?> <?= $recette['auteur']['nom'] ?></h3>
</main>

<? include('./includes/footer.php') ?>
<? include('./includes/pageStop.php') ?>
