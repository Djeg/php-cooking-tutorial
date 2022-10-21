<?
/*
Page d'accueil de mon site de recette de cuisine
*/

$pageTitle = 'Les plus populaires';
// On inclue les recettes de cuisine
include('./includes/recettes.php');
include('./includes/pageStart.php');
include('./includes/header.php');

// On récupére un tableaux avec tout les likes
// exemple : [56, 12, 9, 67 ...]
$recettes = fetchAllRecipes();
$likes = array_column($recettes, 'likes');

// On demande à trier de manière decroisante
// notre tableaux de recette en fonction de notre
// tableaux de likes
array_multisort($likes, SORT_DESC, $recettes);
?>

<!-- Contient le contenu de la page -->
<main class="content">
    <? /* On boucle sur les recettes */ ?>
    <? foreach ($recettes as $recette) : ?>
        <? /* Pour chaque recette nous affichons une petite carte */ ?>
        <div class="recette">
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
        </div>
    <? endforeach ?>
</main>

<? include('./includes/footer.php') ?>
<? include('./includes/pageStop.php') ?>
