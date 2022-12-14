<!-- Contient le header de la page -->
<header class="navbar">
    <div class="logo">
        <img src="./images/logo.png" alt="Cook Me" />
        <p class="brand">CookMe</p>
    </div>
    <nav class="menu">
        <a href="./index.php">Accueil</a>
        <a href="./populaires.php">Les Plus Populaire</a>
        <a href="./contact.php">Contact</a>
        <a href="./nouvelleRecette.php">Nouvelle Recette</a>

        <? if (isset($_COOKIE['user_email'])) : ?>
            <p><?= $_COOKIE['user_prenom'] ?> <?= $_COOKIE['user_nom'] ?></p>
            <a href="./deconnexion.php">Se déconnécter</a>
        <? else : ?>
            <a href="./connexion.php">Se Connécter</a>
            <a href="./inscription.php">S'inscrire</a>
        <? endif ?>

    </nav>
</header>
