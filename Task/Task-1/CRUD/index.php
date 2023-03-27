<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>USER INFO</h2>
<?php 
   $conn=new mysqli("127.0.0.1:3307", "root", "","userdb") or die("connection failure");
   $sql = "SELECT * FROM user_info";
   $result= $conn->query($sql);
   if($result->num_rows>0){
    ?>
<table style="width:100%">
  <tr>
    <th>user_ID</th>
    <th>user_Name</th>
    <th>Action</th>
  </tr>
  <?php
  while($rows= $result->fetch_assoc()){
    ?>
  <tr>
    <td><?php echo $rows['user_ID'] ?></td>
    <td><?php echo $rows['userName'] ?></td>
    <td>
   <button><a href="http://localhost/Task/Task-1/crud/delProcess.php?id=<?php echo $rows['user_ID'] ?>">Delete</a></button>
    <button><a href="http://localhost/Task/Task-1/crud/EditForm.php?id=<?php echo $rows['user_ID']?> ">Edit</a></button>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
<?php 
   }
?>
</body>
</html>