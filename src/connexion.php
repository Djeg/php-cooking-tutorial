<?

$pageTitle = 'Connexion';
include('./includes/pageStart.php');
include('./includes/header.php');

?>

<main class="content">
    <h1 class="display">Se Connécter</h1>
    <form method="POST" action="./connexion.traitement.php">
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" />
        </div>

        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" />
        </div>

        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</main>

<?
include('./includes/footer.php');
include('./includes/pageStop.php');
?>
