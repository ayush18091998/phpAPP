<?php 
//if(isset($_POST['submit']) ): 
        $name=$_POST["name"];
        $servername = "127.0.0.1:3307";
        $username = "root";
        $password = "";
        $DB = 'userDB';

        $conn=new mysqli($servername, $username, $password,$DB);
        
if($conn->connect_errno){
        die("Connection failed: " . $conn->connect_error);
}
//endif;?>
<?php
 $sql="INSERT INTO user_info (userName) VALUES(' $name')";
        
       
 if ($conn->query($sql) === false) {
         die("Error: " . $sql . "<br>" . $conn->error);
 }
?>
<?php
if(isset($_POST['delete'])){
   $d_id=$conn->real_escape_string($_POST['id_to_del']);
   $sql="DELETE FROM user_info
   WHERE user_ID = $d_id "; 
   if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
}   
$sql="SELECT * FROM user_info ";
 
 $result = $conn->query($sql);
 if($result->num_rows>0){
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>USERS</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
 </head>
 <body>
 <table class="table table-striped">
         <tr  >
           <th scope="col">userId</th>
           <th scope="col">userName</th>
           <th scope="col">Delete</th>
           <th scope="col">Edit</th>
         </tr>
        <?php
         $i=1;
         while ($attribute = $result->fetch_assoc()) {
         $user_Name= $attribute['userName'];
         $uid=$attribute['user_ID'];
      ?>      
         <tr  class="userDetails" row=`${i}`>
            <td ><?php echo "$i";?></td>
            <td ><?php echo "$user_Name";?></td>
            <td class="delete">
               <form action='WriteDB.php' method='post'>
                  <input type="hidden" name="id_to_del" value="<?php echo "$uid" ?>"  >
                  <input type="submit"  name="delete" value="Delete"/>
               </form>            
            </td>
            <td ><button type="button" class="btn btn-primary">Edit</button></td>
         </tr>
 <?php 
 $i++;
 }
 ?>
 
 </table>
 <?php
 }
 ?>
 <script src="util.js" type="text/javascript"></script>
 </body>
 
 </html>
