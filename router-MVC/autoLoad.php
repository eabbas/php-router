<?php
class autoLoad
{
   public static function load($className)
   {
      if ($className === "userController") {
         $className = "controller/$className";
      }
      if ($className === "mainDB" || $className === "userConnection") {
         $className = "model/$className";
      }
      if ($className === "loadView") {
         $className = "view/$className";
      }
      $className .= ".php";
      if (file_exists($className)) {
         include "$className";
      } else {
         die("This ($className) has not found.");
      }
   }
}
spl_autoload_register(["autoLoad", "load"]);
