<?php
$conn=new mysqli("127.0.0.1:3307", "root", "","userdb") or die("connection failure");
$newName=$_POST['newName'];
$id=$_POST['ID'];
$sql="UPDATE user_info SET userName = '{$newName}'  WHERE user_ID={$id}";
$result=$conn->query($sql) or die("Querry failed");


header("location:  http://localhost/Task/Task-1/crud/index.php");
$conn->close();
?>