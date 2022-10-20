<?
session_start();

$pageTitle = 'Contact';
include('./includes/pageStart.php');
include('./includes/header.php');

?>

<main class="content">
    <h1 class="display">Contactez-nous</h1>
    <form>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?= $_GET['email'] ?>" />
        </div>

        <div>
            <label for="message">Votre message :</label>
            <textarea id="message" name="message"></textarea>
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
