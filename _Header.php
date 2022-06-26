<?php
require 'Db.class.php';
require 'Panier.class.php';
$db = new DataBase();
$panier = new Panier($db);
?>