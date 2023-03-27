<?php
$conn=new mysqli("127.0.0.1:3307", "root", "","userdb") or die("connection failure");
$id = $_GET['id'];
$sql="DELETE FROM  user_info WHERE user_ID={$id} ";

$result=$conn->query($sql) or die("Unable to delete") ;

header("location:  http://localhost/Task/Task-1/crud/index.php");
$conn->close();