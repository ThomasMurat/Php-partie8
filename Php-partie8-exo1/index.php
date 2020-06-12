
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie8-exo1</title>
    </head>
    <body>
        <p><?= 'Votre user Agent est : ' . $_SERVER['HTTP_USER_AGENT'] ?></p>
        <p><?= 'Votre adresse ip est : ' . $_SERVER['REMOTE_ADDR'] ?></p>
        <p><?= 'Le nom du serveur est : ' . $_SERVER['SERVER_NAME'] ?></p>
    </body>
</html>