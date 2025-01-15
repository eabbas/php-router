<?php
abstract class dbConnection {
     protected $server;
     protected $user;
     protected $password;
     protected $dbName;
     protected $connection;
     protected function __construct(){
        $this->server='localhost';
        $this->user='root';
        $this->password='';
        $this->dbName='productmvc';
        $this->connection=new mysqli($this->server,$this->user,$this->password,$this->dbName);
    }
    public function select($query){
        $this->connection->query($query);
    } 
}
?>