<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit User</title>
</head>
<body>
    <form action="http://localhost/router_MVC/viewUser/updateUserForm" method="post">
    <?php
        foreach($data as $value){
    ?>
        <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
        <input type="text" name="name" value="<?php echo $value['name']; ?>" placeholder="enter your name ...">
        <input type="text" name="family" value="<?php echo $value['family']; ?>" placeholder="enter your family ...">
        <input type="text" name="age" value="<?php echo $value['age']; ?>" placeholder="enter your age ...">
        <button type="submit">submit</button>
        <?php
        }
        ?>
    </form>
</body>
</html>