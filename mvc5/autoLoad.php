<?php
class autoLoad{
    public static function autoLoad($class){
        // var_dump($class);
    $className=$class.".php";
    if($class=='app' || $class == 'container'){
        $className="app/$class.php";
        // var_dump($className);
    }
    if($class=='controller'){
        $className="interFace/$class.php";
    
    }
    if($class=='userController' || $class == 'productController' || $class == 'categoryController'){
        $className="controller/$class.php";
    
    }
    if($class=='mainDb' || $class == 'userModel'){
        $className="model/$class.php";
    
    }
    if($class=='loadView' || $class == 'view' || $class == "userForm"){
        $className="view/$class.php";
        // var_dump($className);
    
    }
    if(file_exists($className)){
        include "$className";
    }else{
        die("class** $class **notfound!!!!");
    }

    }

    }
spl_autoLoad_register(['autoload','autoLoad']);
?>