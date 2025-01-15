<?php

include("mainDB.php");

class modelUser extends mainDB{
    public $table = "users";
    public function insert($data){
        $name = $data['name'];
        $family = $data['family'];
        $age = $data['age'];
        $query = "INSERT INTO users (name, family, age) VALUES ('$name', '$family', '$age')";
        $this -> conn -> query($query);
    }
    public function update($data){
        $id = $data['id'];
        $name = $data['name'];
        $family = $data['family'];
        $age = $data['age'];
        $query = "UPDATE users SET name = '$name', family = '$family', age = '$age' WHERE id =" . $id;
        $this -> conn -> query($query);
    }
}