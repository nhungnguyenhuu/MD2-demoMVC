<?php

namespace app\model;

use PDO;

class ProductTypeModel
{
    public $connect;

    public function __construct()
    {
        $db = new DBConnection();
        $this->connect = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from producttype";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
        $sql = "update producttype set name =?, description = ? where id =?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["description"]);
        $stmt->bindParam(3, $id);
        $stmt->execute();
    }

    public function getProductTypeById($id)
    {
        $sql = "select * from producttype where id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $sql = "delete from producttype where id = $id";
        $stmt = $this->connect->query($sql);


    }
    public function create($data)
    {
        $sql = "insert into producttype(name, description) values (?,?)";
        $stmt =$this->connect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["description"]);
        $stmt->execute();

    }


}