<?php
   session_start();
   include 'dbconfig.php';
   $myusername = $_POST['username'];
   $mypassword = $_POST['password'];

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

   	 $sql = "SELECT * FROM user WHERE username = '$myusername'";
      
      $result = mysqli_query($db,$sql);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$username = $row['username'];
      

      $count = mysqli_num_rows($result);
    if($count == 1) {
    	echo "Name is already taken";
    	 sleep(10);
         header("location: login-page.php");
    } else {
      
      $sql = "INSERT INTO user (username, password) VALUES( '$myusername', '$mypassword');";
      
      mysqli_query($db,$sql);

      header("location: login-page.php");

      }
   }
?>