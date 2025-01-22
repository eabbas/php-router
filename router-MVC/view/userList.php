<?php
foreach ($data as $row) {
?>
   <div>
      <div>
         <span>id : <?= $row["id"] ?></span>
         <span>name : <?= $row["name"] ?></span>
         <span>family : <?= $row["family"] ?></span>
         <span>age : <?= $row["age"] ?></span>
         <span><a href="http://localhost/router-MVC/view/edit/<?= $row["id"] ?>">edit user</a></span>
         <span><a href="http://localhost/router-MVC/view/delete/<?= $row["id"] ?>">delete user</a></span>
      </div>
   </div>
<?php
}
?>