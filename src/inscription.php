<?

$pageTitle = 'Contact';
include('./includes/pageStart.php');
include('./includes/header.php');

?>

<main class="content">
    <h1 class="display">Inscription</h1>
    <form method="POST" action="./inscription.traitement.php">
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" />
        </div>

        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" />
        </div>

        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" />
        </div>

        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="lastname" />
        </div>

        <div>
            <label for="sexe">Sexe :</label>
            <select id="sexe" name="sexe">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>

        <div>
            <label for="imageUrl">Image de profile :</label>
            <input type="url" id="imageUrl" name="imageUrl" />
        </div>

        <div>
            <label for="birthdate">Date de naissance :</label>
            <input type="date" id="birthdate" name="birthdate" />
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
