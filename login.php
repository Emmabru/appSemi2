<?php
   include("dbconfig.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
        
      $sql = "SELECT username FROM user WHERE username = '$myusername' and password = '$mypassword'";
      // Test of sql query
      //echo $sql;


			/*Send error message to the server log if error connecting to the database
			if (!mysqli_connect("localhost","bad_user","bad_password","my_db")) {
			    error_log("Failed to connect to database!", 0);
			} */
      $result = mysqli_query($db,$sql);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $username = $row['username'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
          
         header("location: index.html");
      }else {
         echo "Your Login Name or Password is invalid";
         sleep(10);
         header("location: login-page.php");
      }
   }
?>