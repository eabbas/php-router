<?php
class mainDb{
    public $conn;
    protected $server='localhost';
    protected $user='root';
    protected $password='';
    protected $dbName='mvc';
    public $table;
    function __construct(){
        $this -> conn = new mysqli($this -> server , $this -> user , $this -> password , $this -> dbName);
    }
    public function select(){
        // echo "selected data ";
        $query = "SELECT * FROM {$this -> table}";
        $select = $this -> conn -> query($query);
        // var_dump($select);
        $array;
        while($x = $select -> fetch_assoc()){
             $array[] =$x;
        }
        return $array;
    }


    // public function select(){
    //     $query="SELECT * FROM {$this->table}";
    //     $select = $this -> conn -> query($query);
    // //    $result = $select -> fetch_assoc();
    // //    return $result;
    // $array;
    //    foreach($select as $row){
    //         $array[] = $row;
    //    }
    //    return $array;
    // //    var_dump($result);
    //     // return $this->connection->query($query);
    // }
}