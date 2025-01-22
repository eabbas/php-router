<?php
class loadView
{
   public static function loadView($fileName, $data = null)
   {
      include "menu.php";
      include "$fileName.php";
   }
}
