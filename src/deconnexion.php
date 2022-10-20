<?php

// On démarre la session
session_start();

// On récupére le nom et le prenom de l'utilisateur
$nom = $_SESSION['user_nom'];
$prenom = $_SESSION['user_prenom'];

// Je détruis la session
session_destroy();

// Je détruis l'email
unset($_SESSION['user_email']);

// Affichage de la page de deconnexion :

$pageTitle = 'Au Revoir';
include('./includes/pageStart.php');
include('./includes/header.php');

?>

<main class="content">
    <h1 class="display">Au Revoir <?= $prenom ?> <?= $nom ?></h1>
</main>

<?
include('./includes/footer.php');
include('./includes/pageStop.php');
?>
