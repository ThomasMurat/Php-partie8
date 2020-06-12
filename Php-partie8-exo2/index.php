<?php 
session_start();
$_SESSION['prenom'] = 'Thomas';
$_SESSION['nom'] = 'Murat';
$_SESSION['age'] = 22;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie8-exo2</title>
    </head>
    <body>
        <a href="user.php">Démmarer une session</a>
    </body>
</html>