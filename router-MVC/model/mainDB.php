<?php
class mainDB
{
   protected $table;
   protected $connection;
   private $server = "localhost";
   private $userName = "root";
   private $pass = "";
   private $dbName = "router-MVC";
   function __construct()
   {
      $this->connection = new mysqli($this->server, $this->userName, $this->pass, $this->dbName);
   }
   public function all()
   {
      $query = "SELECT * FROM {$this->table}";
      return $this->connection->query($query);
   }
   public function selectAll()
   {
      $selected = $this->all();
      if ($selected->num_rows != 0) {
         while ($row = $selected->fetch_assoc()) {
            $tableArray[] = $row;
         }
         return $tableArray;
      }
   }
   public function find($id)
   {
      $query = "SELECT * FROM {$this->table} WHERE id=" . $id;
      return $this->connection->query($query);
   }
   public function customSelect($id)
   {
      $selected = $this->find($id);
      return $selected->fetch_assoc();
   }
   public function delete($id)
   {
      $query = "DELETE FROM {$this->table} WHERE id=" . $id;
      return $this->connection->query($query);
   }
}
