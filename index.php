<?php
require "vendor/autoload.php";

use app\controller\ProductsController;
use app\model\ProductTypeModel;
use app\controller\ProductTypeController;

$productTypeController = new ProductTypeController();
$productController = new ProductsController();
$page = $_GET["page"] ?? "";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=product-list">Product</a>
<a href="index.php?page=productType-read">ProductType</a>

<?php

switch ($page) {
    case "productType-read":
        $productTypeController->getAll();
        break;
    case "productType-edit":
        $productTypeController->update();
        break;
    case "productType-detail":
        $productTypeController->getProductTypeById();
        break;
    case "productType-delete":
        $productTypeController->delete($_REQUEST["id"]);
        break;
    case "productType-create":
        $productTypeController->create();
        break;
    case "product-create":
        $productController->create();
        break;
    case "product-list":
        include "app/view/product/list.php";
        break;
    default:


}
?>
</body>

</html>
