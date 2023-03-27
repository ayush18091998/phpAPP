<?php 
     $conn=new mysqli("127.0.0.1:3307", "root", "","userdb") or die("connection failure");
     $name=$_POST['name'];
     $sql="INSERT INTO user_info (userName) VALUES(' $name')";
     $conn->query($sql);
     header("location: http://localhost/Task/Task-1/crud/index.php");
     $conn->close();
     ?>
