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
    <? foreach (fetchAllRecipes() as $recette) : ?>
        <? /* Pour chaque recette nous affichons une petite carte */ ?>
        <a class="recette" href="./recette.php?id=<?= $recette['id'] ?>">
            <div class="background">
                <div class="layer"></div>
                <img src="<?= $recette['image'] ?>" alt="<?= $recette['title'] ?>" />
            </div>
            <h3 class="title"><?= $recette['title'] ?></h3>
            <p class="description"><?= $recette['description'] ?></p>
            <div class="like"><?= $recette['likes'] ?></div>
            <div class="difficulty"><?= $recette['difficulty'] ?></div>
            <div class="footer">
                <div class="price"><?= $recette['price'] ?></div>
                <div class="author">
                    <?= $recette['author'] ?>
                </div>
            </div>
        </a>
    <? endforeach ?>
</main>

<? include('./includes/footer.php') ?>
<? include('./includes/pageStop.php') ?>
