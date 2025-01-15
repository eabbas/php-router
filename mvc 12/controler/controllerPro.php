<?php
class controllerProduct{
    public $table ;
    public function select(){

        $all="SELECT * FROM product "
        $allData=$this->select();
        // view :: loadview("view.php",$allData);
    }
}

?>