<?

$pageTitle = 'Nouvelle Recette';
include('./includes/pageStart.php');
include('./includes/header.php');
?>

<main class="content">
    <h1 class="display">Nouvelle Recette</h1>
    <form>
        <div>
            <label for="title">Intitulé :</label>
            <input type="text" id="title" name="title" />
        </div>

        <div>
            <label for="description">Description :</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div>
            <label for="imageUrl">URL de l'image :</label>
            <input type="text" id="imageUrl" name="imageUrl" />
        </div>

        <div>
            <label for="price">Prix :</label>
            <select name="price" id="price">
                <option value="€">€</option>
                <option value="€€">€€</option>
                <option value="€€€">€€€</option>
            </select>
        </div>

        <div>
            <label for="difficulty">Difficulté :</label>
            <select name="difficulty" id="difficulty">
                <? foreach (range(1, 10) as $difficulty) : ?>
                    <option value="<?= $difficulty ?>"><?= $difficulty ?></option>
                <? endforeach ?>
            </select>
        </div>

        <div>
            <button type="submit">Créer</button>
        </div>
    </form>
</main>

<?
include('./includes/footer.php');
include('./includes/pageStop.php');
?>
