<?php

class loadView{
  public static function view($fileName , $data = null ){
    if($fileName){
      include "menue.php";
      include "$fileName";
    }
  }
}