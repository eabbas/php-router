<?php


// $modelUser = new modelUser;
// $modelUser = container :: resolve(modelUser::class)();
class userController{
    public static $modelUser;
    public function test(){
        echo "🙂";
    }
    public function modelUser(){
        return container :: resolve(modelUser::class)();
    }
    public function getSelect(){
        return $this -> modelUser() -> getSelect();
    }
    public function find($id){
        return $this -> modelUser() -> find($id);
    }
    public function index($address, $id = null){
        if ($address == "viewUser") {
            loadViewUser::index($address, $this -> getSelect());
        }
        if ($address == "home" || $address == "") {
            loadViewUser::index("home");
        }
        if ($address == "userForm") {
            loadViewUser::index($address);
        }
        if ($address == "editUserForm") {
            loadViewUser::index($address, $this -> find($id));
        }
    }
    public function insert($data){
        $this -> modelUser() -> insert($data);
    }
    public function update($id){
        $this -> modelUser() -> update($id);
    }
}
// userController::$modelUser = $modelUser;