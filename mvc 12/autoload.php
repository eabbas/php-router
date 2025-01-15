<?php
class autoLoad{
    public function autoLoad($className){
        $class=$className.".php";
        if (file_exists($clss)){
            include "$class";
        }else{
            die("class $class not found");
        }
    }
}
spl_autoload_register(['autolLoad','auotLoad']);