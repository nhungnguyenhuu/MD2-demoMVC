<?php

namespace app\model;

class ProductModel
{
    public $connect;
    public function __construct()
    {
        $db = new DBConnection();
        $this->connect= $db->connect();
    }
    public function create($data)
    {
        $sql = "insert into products(name, quantity, price, producttype_id) values (?,?,?,?)";
        $stmt =$this->connect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["quantity"]);
        $stmt->bindParam(3, $data["price"]);
        $stmt->bindParam(4, $data["producttype_id"]);
        $stmt->execute();
    }

}