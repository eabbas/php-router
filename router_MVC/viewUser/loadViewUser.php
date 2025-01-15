<?php


include "header.php";
class loadViewUser{
    public static function index($fileName, $data = null){
        $fileName .= ".php";
        echo $fileName;
        include "$fileName";
    }
}