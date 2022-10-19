<?
/*
Page d'accueil de mon site de recette de cuisine
*/

// On inclue les recettes de cuisine
include('./includes/recettes.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css" />
    <title>CookMe - Accueil</title>
</head>

<body>
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
        </nav>
    </header>

    <!-- Contient le contenu de la page -->
    <main class="content">
        <? /* On boucle sur les recettes */ ?>
        <? foreach ($recettes as $recette) : ?>
            <? /* Pour chaque recette nous affichons une petite carte */ ?>
            <div class="recette">
                <div class="background">
                    <div class="layer"></div>
                    <img src="<?= $recette['image'] ?>" alt="<?= $recette['intitulé'] ?>" />
                </div>
                <h3 class="title"><?= $recette['intitulé'] ?></h3>
                <p class="description"><?= $recette['description'] ?></p>
                <div class="like"><?= $recette['likes'] ?></div>
                <div class="difficulty"><?= $recette['difficulte'] ?></div>
                <div class="footer">
                    <div class="price"><?= $recette['prix'] ?></div>
                    <div class="author">
                        <?= $recette['auteur']['prenom'] ?> <?= $recette['auteur']['nom'] ?>
                    </div>
                </div>
            </div>
        <? endforeach ?>
    </main>

    <!-- Contient le pied de page -->
    <footer class="footer">
        <nav class="menu">
            <a href="./index.php">Accueil</a>
            <a href="./populaires.php">Les Plus Populaire</a>
            <a href="./contact.php">Contact</a>
            <a href="./nouvelleRecette.php">Nouvelle Recette</a>
        </nav>
        <p><span class="display">CookMe</span> &copy; 2022</p>
    </footer>
</body>

</html>
