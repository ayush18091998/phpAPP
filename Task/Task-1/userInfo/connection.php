<?php 
if(isset($_POST['submit']) ): 
        $name=$_POST["name"];
        $servername = "127.0.0.1:3307";
        $username = "root";
        $password = "";
        $DB = 'userDB';

        $conn=new mysqli($servername, $username, $password,$DB);
        
if($conn->connect_errno){
        die("Connection failed: " . $conn->connect_error);
}
endif;?>