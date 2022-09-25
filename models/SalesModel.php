<?php
class SalesModel
{
    private $db;
    private $Sales;

    public function __construct()
    {
        $this->db = Connect::Connection();
        $this->Sales = array();
    }

    public function index()
    {
        $sql = "SELECT `sales`.`id`, `productName`, `quantity`, quantity * `products`.`price` AS `value`, `product_id` FROM `sales` INNER JOIN `products` ON `sales`.`product_id` = `products`.`id`";
        $result = $this->db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $this->Sales[] = $row;
        }
        return $this->Sales;
    }

    public function show($id)
    {
        //$sql = "SELECT `sales`.`id`, `productName`, `quantity`, `value` FROM `sales` INNER JOIN `products` ON `sales`.`product_id` = `products`.`id` WHERE `sales`.`id` = '$id' LIMIT 1";
        $sql = "SELECT `sales`.`id`, `productName`, `quantity`, `value` FROM `sales` INNER JOIN `products` ON `sales`.`product_id` = `products`.`id` WHERE `sales`.`id` = '$id' LIMIT 1";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    public function Add($product_id, $quantity)
    {
        $sql = "INSERT INTO `sales` (`product_id`, `quantity`) VALUES ('$product_id', '$quantity')";
        $this->db->query($sql);
        $sqlStock = "UPDATE `konecta_coffee_shop`.`products` SET `stock` = (`stock` - '$quantity') WHERE `id` = '$product_id'";
        $this->db->query($sqlStock);
    }
}