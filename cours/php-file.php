<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecrire du php</title>
</head>

<body>
    <?php
    // Il est possible de placer du code php n'importe ou dans mon fichier
    // html :
    $nom = 'John Doe';
    $age = 20;
    ?>
    <h1>Bienvenue <?php echo $nom; ?></h1>

    <?php if ($age >= 18) { ?>
        <p>Hey vous êtes majeur !!</p>
    <?php  } else { ?>
        <p>Hey vous êtes mineur !!</p>
    <?php } ?>
</body>

</html>
