<?php
   session_start();
   include 'dbconfig.php';
   $myusername = $_POST['username'];
   $mypassword = $_POST['password'];

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $sql = "SELECT * FROM user WHERE username = '$myusername' and password = '$mypassword'";
      
      $result = mysqli_query($db,$sql);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$username = $row['username'];
      

      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");

         $_SESSION['id'] = $row['id_user'];
         $_SESSION['user'] = $row['username'];
         
			
         header("location: recipe.php");
      }else {
         echo "Your Login Name or Password is invalid";
         sleep(10);
         header("location: login-page.php");
      }
   }
?>