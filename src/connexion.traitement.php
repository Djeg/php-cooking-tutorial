<?

// On inclue les utilisateurs
include('./includes/users.php');

// On test si le mot de passe et l'email
// on bien étaient envoyés
if (!isset($_POST['email'])) {
    // Redirection vers la page d'erreur !!
    header('Location: ./connexion.erreur.php');
    // Arret du script php
    die();
}

if (!isset($_POST['password'])) {
    // Redirection vers la page d'erreur !!
    header('Location: ./connexion.erreur.php');
    // Arret du script php
    die();
}

// On récupére l'email et le mot de passe,
// en s'assurant qu'ils soient bien formatté!
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$password = $_POST['password'];

// On s'assure qu'il ny a pas d'erreur concernant l'email
// et le mot de passe
if ($email === false || !$password) {
    // Redirection vers la page d'erreur !!
    header('Location: ./connexion.erreur.php');
    // Arret du script php
    die();
}

// On créé un variable $user qui contiendra
// le possible utilisateur
$user = null;

// Je récupére tout les utilisateurs depuis la base de données
$utilisateurs = fetchAllUsers();

// Je vais boucler sur tout mes utilisateurs
foreach ($utilisateurs as $utilisateur) {
    // On test si l'email et le mot de passe correspondent
    if ($utilisateur['email'] === $email && $utilisateur['password'] === $password) {
        // On assign le $user à l'utilisateur correspondant
        $user = $utilisateur;

        // On casse la boucle (on sort de la boucle)
        break;
    }
}

// On vérifie que nous avons trouvé l'utilisateur
if (!$user) {
    // Redirection vers la page d'erreur !!
    header('Location: ./connexion.erreur.php');
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


// On affiche la page de bienvenue :

$pageTitle = 'Bienvenue :)';
include('./includes/pageStart.php');
include('./includes/header.php');

?>

<main class="content">
    <h1 class="display">Bienvenue !</h1>
    <p>
        Content de vous revoir <?= $user['firstname'] ?> <?= $user['lastname'] ?>
    </p>
</main>

<?
include('./includes/footer.php');
include('./includes/pageStop.php');
?>
