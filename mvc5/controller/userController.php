<?php


class userController{
  public static $modelObject;
  public static function getObject(object $model){
    self :: $modelObject = $model;
    // var_dump($this -> modelObject);
  }
  public function all(){
    // echo "okkkkkk";
    $allData = self :: $modelObject -> select();
    loadView :: view("view.php" , $allData);
  }
  // public function index(){
  //   $insertData = self :: $modelObject -> data();
  //   // loadView :: view("userForm.php" , $insertData);
  //   // var_dump($insertData);
  //   if ($insertData == "userForm") {
  //     loadView :: view("userForm.php");
  //   }
  // }
  public function index($address){
    if ($address == "userForm") {
      loadView :: view("userForm.php");
    }
  }
  public function index1($address){
    if ($address == "create") {
      loadView :: view("create.php");
    }
  }


  // public function creat(){
  //   $insertData = self :: $modelObject -> insert();
  //   loadView :: view("view.php" , $insertData);
  // }
}
$userModel = new userModel();
userController :: getObject($userModel);
// $userModel = new userModel();
// $userController = new userController();
// $userController -> getObject($userModel);
