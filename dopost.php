<?php
include('db.php');

echo "<h3>View posted data:</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";
echo "<h3>View individual data:</h3>";
echo $_POST['name']."<br />";
echo $_POST['email']."<br />";
echo $_POST['address']."<br />";

if($_POST['name'] != ""){
    if($_POST['sex'] == "F"){
        $_POST['sex'] = "หญิง";
    }else{
        $_POST['sex'] = "ชาย";
    }
    if($_POST['study'] == "on"){
        $_POST['study'] = "เรียน";
    }
    if($_POST['game'] == "on"){
        $_POST['game'] = "เกม";
    }
    $sql = "INSERT INTO Register(name_Register,email_Register,sex_Register,
    study_Register,game_Register,address_Register,PROVINCE_ID) VALUES ('".$_POST['name']."', 
        '".$_POST['email']."',
        '".$_POST['sex']."',
        '".$_POST['study']."',
        '".$_POST['game']."',
        '".$_POST['address']."',
        '".$_POST['province']."');";
    $conn->query($sql);
}
?>