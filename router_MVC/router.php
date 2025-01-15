<?php

class router{
    public function userController(){
        return new userController;
    }
    // public function getUserCreate(): create{
    //     return new create;
    // }
    public function post(string $address,$data = null){
        if ($address == "home" || $address == "") {
            $this -> userController() -> index("home");
        }
        if ($address == "viewUser" || $address == "userForm") {
            $this -> userController() -> index($address);
        }
        if ($address == "create") {
            $this -> userController() -> insert($data);
        }
        if($address == "editUserForm"){
            $this -> userController() -> index($address, $data);
        }
        if ($address == "updateUserForm") {
            $this -> userController() -> update($data);
        }
        // اگر از آبجکت یوزر کرییت استفاده کنیم این کاندیشن اجرا میشه
        // if ($address == "create") {
        //     $data = $this -> getUserCreate() -> sendData();
        //     $this -> userController() -> insert($data);
        // }
    }
}