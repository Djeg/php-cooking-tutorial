<?

// Inclusion des utilisateurs
include('./includes/users.php');

// Création de l'utilisateur
$user = createNewUser($_POST);

// Si aucun utilisateur n'as pas être créé
if ($user === false) {
    // On redirige vers la page d'inscription
    header('Location: ./inscription.php');
    // Arret du script php
    die();
}

// Enregistrement des informations de l'utilisateur
// dans la session
setcookie('user_email', $user['email'], [
    'secure' => true,
    'httpOnly' => true,
    'expires' => time() + 180 * 24 * 3600,
]);
setcookie('user_nom', $user['lastname'], [
    'secure' => true,
    'httpOnly' => true,
    'expires' => time() + 180 * 24 * 3600,
]);
setcookie('user_prenom', $user['firstname'], [
    'secure' => true,
    'httpOnly' => true,
    'expires' => time() + 180 * 24 * 3600,
]);
$_COOKIE['user_email'] = $user['email'];
$_COOKIE['user_nom'] = $user['lastname'];
$_COOKIE['user_prenom'] = $user['firstname'];


// On affiche la page de bienvenue :

$pageTitle = 'Bienvenue :)';
include('./includes/pageStart.php');
include('./includes/header.php');

?>

<main class="content">
    <h1 class="display">Bienvenue !</h1>
    <p>
        Content de vous connaitre <?= $user['firstname'] ?> <?= $user['lastname'] ?>
    </p>
</main>

<?
include('./includes/footer.php');
include('./includes/pageStop.php');
?>
