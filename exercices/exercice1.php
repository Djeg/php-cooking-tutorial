<!--
Créer un fichier php nommé "exercice1.php".

Dans ce fichier créer une variable "nom" avec la valeur
de votre choix.

Afficher le nom dans une balise h1.
-->
<?php
$nom = 'John';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>
    <h1><?php echo $nom; ?></h1>
</body>

</html>
