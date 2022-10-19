<?
/*
Page d'accueil de mon site de recette de cuisine
*/

// On inclue les recettes de cuisine
include('./includes/recettes.php');
?>

<?
$pageTitle = 'Accueil';
include('./includes/pageStart.php');
?>
<? include('./includes/header.php'); ?>

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

<? include('./includes/footer.php') ?>
<? include('./includes/pageStop.php') ?>
