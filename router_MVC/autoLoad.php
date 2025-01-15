<?php

class autoLoad{
    public function load($className){
        $obj = $className . ".php";
        if ($className == "modelUser") {
            $obj = "model/" . $obj;
        } if ($className == "userController") {
            $obj = "userController/" . $obj;
        } if($className == "loadViewUser" || $className == "viewUser" || $className == "create" || $className == "updateUser") {
            $obj = "viewUser/" . $obj;
        }
        if (file_exists($obj)){
            include "$obj";
        } else {
            die("class \"$className\" not exists");
        }
    }
}

spl_autoLoad_register([new autoLoad, "load"]);