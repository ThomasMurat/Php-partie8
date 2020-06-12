
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie8-exo3</title>
    </head>
    <body>
    <?php 
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
        setcookie('password', $_POST['password'], time() + 365*24*3600, null, null, false, true);
        ?><p><?= 'Votre login est : ' . $_COOKIE['login'] ?></p>
        <p><?= 'Votre mot de passe est : ' . $_COOKIE['password'] ?></p><?php
    }?>
    <form action="userChange.php" method="post">
        <li>
            <label for="login">Choississez votre login : </label>
            <input id="login" type="text" name="login"/>
        </li>
        <li>
            <label for="password">Choississez votre mot de passe : </label>
            <input id="password" type="text" name="password"/>
        </li>
        <li><input type="submit" value="modifier mes identifiants"></li>
    </form>
    </body>
</html>