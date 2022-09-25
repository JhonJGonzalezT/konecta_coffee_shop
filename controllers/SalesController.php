<?php
class SalesController
{
    public function __construct()
    {
        require_once "models/SalesModel.php";
        require_once "models/ProductsModel.php";
    }
    public function vwSell()
    {
        $data['title'] = 'Vender producto';
        $product = new ProductsModel();
        $data['product'] = $product->show($_GET['id']);
        require_once 'views/sales/salesAdd.php';
    }
    public function index()
    {
        $sales = new SalesModel();
        $data['title'] = 'Listado de ventas';
        $data['sales'] = $sales->index();
        require_once 'views/sales/sales.php';
    }
    public function Add()
    {
        $product_id = $_POST['product_id'];
        $quantity = $_POST['productQuantity'];
        $stock = $_POST['stock'];
        if ($stock >= $quantity) {
            $request = new SalesModel();
            $request->Add($product_id, $quantity);
            $this->index();
        } else {
            echo '<script type="text/javascript">
                window.onload = function () { alert("No es posible realizar la venta. Por favor actualice el stock del inventario para registrar la venta"); } 
            </script>';
            $product = new ProductsController();
            $product->vwUpdate($product_id);
        }
    }
}