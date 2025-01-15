<form action="http://localhost/router-MVC/view/updateUserData" method="post">
   <input type="hidden" name="id" value="<?= $data["id"] ?>">
   <input type="text" name="name" value="<?= $data["name"] ?>">
   <input type="text" name="family" value="<?= $data["family"] ?>">
   <input type="text" name="age" value="<?= $data["age"] ?>">
   <button type="submit">update</button>
</form>