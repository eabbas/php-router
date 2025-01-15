<?php

class userModel extends mainDb{
  public $table = 'user';
  // // public $request;
  // public function data(request $object){
  //   $data = $object -> getDataa();
  //   // var_dump($data);
  // userModel :: insert($data);

  // }
  // public static function insert($data){
  //   // $name = $_POST['name'];
  //   // $age = $_POST['age'];
  //   // $query = "INSERT INTO user (name, age) VALUES ('$name', '$age')";
  //   // return $insertt = $this->conn-> query($query);
  //   // var_dump($data);
  // }
  
}
$userModel = new userModel;
// $userModel -> data(new request);
// // $userModel -> request = new request;