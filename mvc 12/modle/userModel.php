<?php
class product extends mainDb{
    
    protected $table="product";

    public function creatProduct($data){
        $name=$data['name'];
        $price=$data['price'];
        $categoryid=$data['categoryid'];
        $query="INSERT INTO product (name,price,categoryid) VALUES ('$name','$price','$categoryid')";
        return $this->connection->query($query);
    }
    
    public function update($data){
    $name=$data['name'];
    $price=$data['price'];
    $productId=$data['productId'];
    $categoryid=$data['categoryid'];
    $query="UPDATE product SET name='$name',price='$price',categoryid='$categoryid' WHERE id='$productId'";
        return $this->connection->query($query);


    }
    public function search($data){
        $name = $data['name'];
        $query="SELECT * FROM product WHERE name='$name'";
        return $this->connection->query($query);

    }
}
