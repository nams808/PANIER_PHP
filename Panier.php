<?php require 'Header.php';

$ids = array_keys($_SESSION['panier']);
//Si le tableau des $ids est vide alors j'envoie au reste qu'il est vide
if(empty($ids))
{
    $products = array();
}
else
//Je continue la requête
{
    $products = $db->requeteSql('SELECT * FROM burgers WHERE id IN (' . implode(',', $ids) . ')');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Asset/Css//Panier.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form method="post" action="panier.php">
<table>
    <tr>
        <th width="400px">
            <h4>Title</h4>
        </th>
        <th width="400px">
            <h4>Qté</h4>
        </th>
        <th width="200px">
            <h4>Price HT</h4>
        </th>
        <th width="400px">
            <h4>Price TTC</h4>
        </th>
        <th width="400px">
            <h4>Action</h4>
        </th>

    </tr>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?= $product->title ?></td>
            <td><input class="qte" type="number" name="panier[quantity][<?= $product->id; ?>]" value="<?= $quantite = $_SESSION['panier'][$product->id]; ?>"></td>
            <td><?= number_format($product->price / 1.055, 2, '.', ' ') * $quantite ?>€</td>
            <td><?= number_format($product->price, 2, '.', ' ') * $quantite ?>€</td>
            
            <td><a  href="panier.php?deletePanier=<?= $product->id; ?>"><img class="corbeille" src="Asset/Image/corbeille 2.png" ></td>
        <?php endforeach; ?>
        
        </tr>
        <tr>
            <th width="400px">
                <h4>Total</h4>
            </th>
            <th width="400px">
                <h4>  </h4>
            </th>
            <th width="400px">
                <h4><?= number_format($panier->total() / 1.055,2,',',' ') ?> €</h4>
            </th>
            <th width="400px">
                <h4><?= number_format($panier->total(),2,',',' ') ?> €</h4>
            </th>
            <th width="400px">
                <h4><input type="submit" class="btn btn-success" value="Recalculer"></h4>
            </th>
    </tr>
</table>
</form>

    </body>
    </html>