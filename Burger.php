<?php
require 'Header.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Asset/Css/Burger.css">
    
    <title>Document</title>
</head>
<body>



<div class="container-fluid">
        <h1>Nos SANDWICHS</h1><br />
        <div class="buton-center">
            <button class="btn btn-primary"><a href="index.php">Retour</a></button>
            <button class="btn btn-success"><a href="#">Panier</a></button>
        </div>
        <br />

        <div class="row">
            


            <?php
            $burgers = $db->requeteSql('SELECT * FROM burgers');?>
            <?php foreach ($burgers as $burger) : ?>

                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="Asset/Image/<?= $burger->image; ?>.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $burger->title ?> <i class="fa-solid fa-cart-plus"></i></h5>
                            <p class="card-text"><?= $burger->description ?></p>
                            <p class="card-text"><?= $burger->category ?></p>
                            <p class="card-text"><?= number_format($burger->price,2,'.',' ') ?>€</p>
                            <a class="btn btn-primary addPan" href="AddPanier.php?id=<?= $burger->id; ?>" >Ajouter</a>
                            
                        </div>
                    </div><br />
                </div>
            <?php
            endforeach; ?>

        </div>
    </div>
    </div>

    


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="Asset/Js/App.js"></script>
</body>
</html>