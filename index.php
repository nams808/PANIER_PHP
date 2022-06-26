<?php
require 'db.class.php';
$db = new DataBase();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="Asset/Css/Index.css">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['login_erreur'])) {
        $erreur = htmlspecialchars($_GET['login_erreur']);

        switch ($erreur) {
            case 'password':
    ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong>Mot de passe incorrect
                </div>
            <?php
                break;

            case 'email':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong>Email incorrect
                </div>
            <?php
                break;

            case 'already':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong>Compte inexistant
                </div>
    <?php
                break;
        }
    }
    ?>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="login-form">

                    <!--<form action="#" method="post">
                        <h2 class="text-center">Connexion</h2>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                        </div>
                    </form>-->
                    <!--<div class="form-group">
                        <p class="text-center"><a class="btn btn-primary btn-block" href="inscription.php">Inscription</a></p>
                    </div>-->
                    <button class="btn btn-primary btn-block"><a href="Burger.php">Burger</a></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>