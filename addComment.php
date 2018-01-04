<?php
   	include("dbconfig.php");
   	session_start();
   	

		//$name = $_SESSION['username'];
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $sql = "INSERT INTO comment (id_recipe, commentid, username, textbox) VALUES (1, 5, ".$_POST['username'].", ".$_POST["user_comment"].")";
      // Test of sql query
      //echo $sql . "<br>";
    
      if($db === false){
      	//echo "neeeeeeeej" . "<br>";
   		 die("ERROR: Could not connect. " . mysqli_connect_error());
		}
       header("location: index.php");
}

