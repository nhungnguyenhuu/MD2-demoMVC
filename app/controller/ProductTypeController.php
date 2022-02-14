<?php
namespace app\controller;
use app\model\ProductTypeModel;

class ProductTypeController
{
    public $productTypeModel;
    public function __construct()
    {
        $this->productTypeModel= new ProductTypeModel();
    }
    public function getAll()
    {
        $productTypes = $this->productTypeModel->getAll();
        include 'app/view/productType/read.php';
    }
    public function getProductTypeById()
    {
        $productType = $this->productTypeModel->getProductTypeById($_REQUEST["id"]);
        include "app/view/productType/detail.php";
    }
    public function update()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $productType = $this->productTypeModel->getProductTypeById($_REQUEST["id"]);
            include "app/view/productType/edit.php";
        }else{
            $data = [
                "name"=>$_REQUEST["name"],
                "description"=>$_REQUEST["description"]
            ];
            $this->productTypeModel->update($data, $_REQUEST["id"]);
            header("location:index.php?page=productType-read");
        }
    }
    public function delete($id)
    {
        $this->productTypeModel->delete($id);

        header("location:index.php?page=productType-read");
    }
    public function create()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){

            include "app/view/productType/create.php";
        }else{
            $data = [
                "name"=>$_REQUEST["name"],
                "description"=>$_REQUEST["description"]
            ];
            $this->productTypeModel->create($data);
            header("location:index.php?page=productType-read");
        }
    }



}