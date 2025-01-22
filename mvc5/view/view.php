<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  // include("menue.php");
  // echo "pwosoe-e";
    foreach($data as $key => $value){
      ?>
  <div style="width: 50%; margin: auto; display: flex; flex-direction: row; justify-content: space-around; align-items:center; background-color: skyblue;">
    <div style="padding: 10px 15px; background-color: red; color: snow; border-radius: 4px; margin: 10px 0;"><?= $value['id']; ?></div>
    <div style="padding: 10px 15px; background-color: red; color: snow; border-radius: 4px; margin: 10px 0;"><?= $value['name']; ?></div>
    <div style="padding: 10px 15px; background-color: red; color: snow; border-radius: 4px; margin: 10px 0;"><?= $value['age']; ?></div>
  </div>
      <?php
     
    }
  ?>
</body>
</html>