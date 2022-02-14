<?php

namespace app\controller;
use app\model\ProductModel;
use app\model\ProductTypeModel;

class ProductsController
{
    public $productsController;
    public function __construct()
    {
        $this->productsController= new ProductModel();
    }
    public function create()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $productTypeController = new ProductTypeModel();
            $productTypes = $productTypeController->getAll();
            include "app/view/product/create.php";

        }else{

            $data = [
                "name"=>$_REQUEST["name"],
                "quantity"=>$_REQUEST["quantity"],
                "price"=>$_REQUEST["price"],
                "producttype_id"=>$_REQUEST["producttype_id"]
            ];

            $this->productsController->create($data);
        }
    }

}