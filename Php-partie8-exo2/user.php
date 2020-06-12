<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie8-exo2-session-result</title>
    </head>
    <body>
        <p><?= 'Votre nom est : ' . $_SESSION['prenom'] ?></p>
        <p><?= 'Votre prénom est : ' . $_SESSION['nom'] ?></p>
        <p><?= 'Vous avez ' . $_SESSION['age'] . 'ans.' ?></p>
    </body>
</html>