<?php
session_start();
//unset($_SESSION);
session_destroy();
//header('location : login.php');
?>
<html>
    <head>

    </head>
    <body>
        <p>Vous êtes bien déconnecter de votre compte</p>
        <p>Retourner à la page d'accueil</p>
        <h3><a href="./index.php">Accueil</a></h3>
    <script>
    //window.location.replace("index.php");
    </script>
    </body>
</html>