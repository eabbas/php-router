<?php
// include "request.php";
class create{
  public  $requestInstance;
  public function catchData(request $obj){
    echo "this is illon mask";
    $data = $obj -> getData();
  }
}
$create = new create();
$create -> catchData(new request );
