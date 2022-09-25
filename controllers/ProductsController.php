<?php

class ProductsController
{
    public function __construct()
    {
        require_once "models/ProductsModel.php";
    }
    public function index()
    {
        $products = new ProductsModel();
        $data["title"] = "Productos";
        $data["products"] = $products->index();
        require_once "views/products/products.php";
    }
    public function vwAdd()
    {
        $data["title"] = "Adicionar producto";
        require_once "views/products/productAdd.php";
    }

    public function vwUpdate($id)
    {
        $product = new ProductsModel();
        $result = $product->show($id);
        $data["product"] = $result;
        $data["id"] = $id;
        $data["title"] = "Actualizar producto";
        require_once "views/products/productUpdate.php";
    }

    public function add()
    {
        $productName = $_POST['productName'];
        $productRef = $_POST['productRef'];
        $price = $_POST['price'];
        $weight = $_POST['weight'];
        $category = $_POST['category'];
        $stock = $_POST['stock'];
        $product = new ProductsModel();
        $product->add($productName, $productRef, $price, $weight, $category, $stock);
        $this->index();
    }

    public function update()
    {
        $id = $_POST['id'];
        $productName = $_POST['productName'];
        $productRef = $_POST['productRef'];
        $price = $_POST['price'];
        $weight = $_POST['weight'];
        $category = $_POST['category'];
        $stock = $_POST['stock'];
        $product = new ProductsModel();
        $product->update($id, $productName, $productRef, $price, $weight, $category, $stock);
        $this->index();
    }

    public function delete($id)
    {
        $product = new ProductsModel();
        $product->delete($id);
        $this->index();
    }
}