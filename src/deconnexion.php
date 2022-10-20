<?php

// On récupére le nom et le prenom de l'utilisateur
$nom = $_SESSION['user_nom'];
$prenom = $_SESSION['user_prenom'];

// Je supprime les cookie
setcookie('user_email', $user['email'], [
    'secure' => true,
    'httpOnly' => true,
    'expires' => 1,
]);
setcookie('user_nom', $user['nom'], [
    'secure' => true,
    'httpOnly' => true,
    'expires' => 1,
]);
setcookie('user_prenom', $user['prenom'], [
    'secure' => true,
    'httpOnly' => true,
    'expires' => 1,
]);
unset($_COOKIE['user_email']);
unset($_COOKIE['user_nom']);
unset($_COOKIE['user_prenom']);

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
