<?php
// include "view/home.php";
include "autoload.php";
// $conn=new appConn();
 container::bind(appConn::class, appConn::class);