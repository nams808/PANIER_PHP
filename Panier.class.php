<?php

class Panier
{

    private $db;

    public function __construct($db)
    {
        if (!isset($_SESSION)) {
            session_start();
        };
        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = array();
        }
        $this->db = $db;

        if (isset($_GET['deletePanier'])) {
            $this->remove($_GET['deletePanier']);
        }
        if(isset($_POST['panier']['quantity'])){
            $this->recalc();
        }
    }

    public function recalc(){
        foreach($_SESSION['panier'] as $product_id => $quantity){
            if(isset($_POST['panier']['quantity'][$product_id])){
                $_SESSION['panier'][$product_id] = $_POST['panier']['quantity'][$product_id];
            }            
        }        
    }

    public function count()
    {
        return array_sum($_SESSION['panier']);
    }
    public function total()
    {
        //$db = new DataBase();
        $total = 0;
        $ids = array_keys($_SESSION['panier']);
        //Si le tableau des $ids est vide alors j'envoie au reste qu'il est vide
        if (empty($ids)) {
            $products = array();
        } else
        //Je continue la requête
        {
            $products = $this->db->requeteSql('SELECT id, price FROM burgers WHERE id IN (' . implode(',', $ids) . ')');
        }
        foreach ($products as $product) {
            $total += $product->price * $_SESSION['panier'][$product->id];
        }
        return $total;
    }

    public function totalQte()
    {
        //$db = new DataBase();
        $total = 0;
        $ids = array_keys($_SESSION['panier']);
        //Si le tableau des $ids est vide alors j'envoie au reste qu'il est vide
        if (empty($ids)) {
            $products = array();
        } else
        //Je continue la requête
        {
            $products = $this->db->requeteSql('SELECT * FROM burgers WHERE id IN (' . implode(',', $ids) . ')');
        }


        foreach ($products as $product) {

            $total++;
            //$quantite = $_SESSION['panier'][$product->id];
            //$total += $product->id * $_SESSION['panier'][$product->id];

        }
        return $total;
    }


    //Ajouter un élément au panier
    public function add($product_id)
    {
        if (isset($_SESSION['panier'][$product_id])) {
            $_SESSION['panier'][$product_id]++;
        } else {
            $_SESSION['panier'][$product_id] = 1;
        }
    }

    //Supprimer un élément du panier
    public function remove($product_id)
    {
        unset($_SESSION['panier'][$product_id]);
    }
}
