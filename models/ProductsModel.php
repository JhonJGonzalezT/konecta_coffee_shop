<?php
class ProductsModel
{
    private $db;
    private $products;

    public function __construct()
    {
        $this->db = Connect::connection();
        $this->products = array();
    }
    public function index()
    {
        $sql = "SELECT `id`, `productName`, `productRef`, `price`, `weight`, `category`, `stock` FROM `products` WHERE `stock` > 0;";
        $result = $this->db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $this->products[] = $row;
        }
        return $this->products;
    }

    public function show($id)
    {
        $sql = "SELECT `id`, `productName`, `productRef`, `price`, `weight`, `category`, `stock` FROM `products` WHERE `id` = '$id' LIMIT 1;";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    public function add($productName, $productRef, $price, $weight, $category, $stock)
    {
        $sql = "INSERT INTO `konecta_coffee_shop`.`products` ( `productName`, `productRef`, `price`, `weight`, `category`, `stock`) VALUES('$productName', '$productRef', '$price', '$weight', '$category', '$stock');";
        $this->db->query($sql);
    }

    public function update($id, $productName, $productRef, $price, $weight, $category, $stock)
    {
        $sql = "UPDATE `konecta_coffee_shop`.`products` SET `productName` = '$productName', `productRef` = '$productRef', `price` = '$price', `weight` = '$weight', `category` = '$category', `stock` = '$stock' WHERE (`id` = '$id');";
        $this->db->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `konecta_coffee_shop`.`products` WHERE (`id` = '$id');";
        $this->db->query($sql);
    }
}