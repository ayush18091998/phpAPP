<!DOCTYPE html>
<html>
<body>
    <?php  $id=$_GET['id'] ?>
<form action="editProcess.php" method="post">  

    <label for="uname"><b>New_Username:</b></label>    
    <input type="text" name="newName" value="" />
    <input type="hidden" name="ID"  value=" <?php  echo $id ?>  "   /> 
    <input type="submit"  name="update"  /> 
</form>  
</body>
</html>