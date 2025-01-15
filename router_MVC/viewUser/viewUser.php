



<div style="display: flex; flex-direction: row; justify-content: space-around; align-items: center; background-color: yellow; margin-top: 20px;">
    <div style="background: gray; padding: 20px 50px; margin: 10px 0; width: 80px; height: 20px; text-align: center;">آیدی</div>
    <div style="background: gray; padding: 20px 50px; margin: 10px 0; width: 80px; height: 20px; text-align: center;">نام</div>
    <div style="background: gray; padding: 20px 50px; margin: 10px 0; width: 80px; height: 20px; text-align: center;">نام خانوادگی</div>
    <div style="background: gray; padding: 20px 50px; margin: 10px 0; width: 80px; height: 20px; text-align: center;">سن</div>
    <div style="background: red; color: white; padding: 20px 50px; margin: 10px 0; width: 80px; height: 20px; text-align: center;">دکمه ها</div>
</div>
<?php
foreach($data as $value){
    ?>
    <div style="display: flex; flex-direction: row; justify-content: space-around; align-items: center; background-color: yellow; margin-top: 20px;">
        <div style="background: gray; padding: 20px 50px; margin: 10px 0; width: 80px; height: 20px; text-align: center;"><?= $value['id'] ?></div>
        <div style="background: gray; padding: 20px 50px; margin: 10px 0; width: 80px; height: 20px; text-align: center;"><?= $value['name'] ?></div>
        <div style="background: gray; padding: 20px 50px; margin: 10px 0; width: 80px; height: 20px; text-align: center;"><?= $value['family'] ?></div>
        <div style="background: gray; padding: 20px 50px; margin: 10px 0; width: 80px; height: 20px; text-align: center;"><?= $value['age'] ?></div>
        <div>
            <a href="http://localhost/router_MVC/viewUser/deleteUser/<?= $value['id'] ?>" style="padding: 10px 20px; background-color: red; margin: 10px;">delete</a>
            <a href="http://localhost/router_MVC/viewUser/editUserForm/<?= $value['id'] ?>" style="padding: 10px 20px; background-color: red; margin: 10px;">edit</a>
        </div>
    </div>
    <?php
}