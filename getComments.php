<?php
include 'dbconfig.php';


      $list_of_comments = array();
      $sql="SELECT commentID FROM recipeToComment WHERE recipeID = '" . $recipe . "';";
      //echo $sql. "</br>";
      $result = mysqli_query($db,$sql);
          while($row= mysqli_fetch_assoc($result)){
             array_push($list_of_comments, $row);
          }
      foreach ($result as $link){
	        $sql="SELECT c.comment,c.author, u.username, c.idcomments
	                from recipeToComment as r
	                inner join comments as c on c.idcomments= r.commentID
	                left join user as u on c.author = u.id_user
	                where r.commentID ='" . $link['commentID'] . "';";
	        //echo $sql . "</br>";
	        $result = mysqli_query($db,$sql);
	            while($row= mysqli_fetch_assoc($result)){
	             array_push($list_of_comments, $row);

	             echo $row['username']. " --> ";
	             echo $row['comment'];
	             	if (isset($_SESSION['user']) and $_SESSION['user'] == $row['username']) {
	             	echo " 
	             		<form class='delete-form' action= 'deletecomments.php' method='POST' >
							<input type='hidden' name='cid' value='".$row['idcomments']."'>
							<button type='submit' name=commentDelete>Delete</button>
						</form>";
	            	}
	        	echo  "</br> ";
	        	}
	    }
