<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie8-exo3</title>
    </head>
    <body>
        <p><?= 'Votre login est : ' . $_COOKIE['login'] ?></p>
        <p><?= 'Votre mot de passe est : ' . $_COOKIE['password'] ?></p>
        <a href="Php-partie8-exo5/userChange.php">modifier mes identifiants</a>
    </body>
</html>