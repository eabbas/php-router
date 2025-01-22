<?php
class userConnection extends mainDB
{
   protected $table = "user";
   public function insert($data)
   {
      $name = $data['name'];
      $family = $data['family'];
      $age = $data['age'];
      $query = "INSERT INTO {$this->table}(name,family,age)VALUES('$name','$family','$age')";
      return $this->connection->query($query);
   }
   public function update($data)
   {
      $userId = $data['id'];
      $name = $data['name'];
      $family = $data['family'];
      $age = $data['age'];
      $query = "UPDATE {$this->table} SET name='$name',family='$family',age='$age' WHERE id=" . $userId;
      return $this->connection->query($query);
   }
}
