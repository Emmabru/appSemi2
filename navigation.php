<?php

session_start();
?>

<div class="menu">
	<nav>
	 <ul>
	  <li><a href="index.php">Home</a></li>
	  <li><a href="recipe.php">Pancakes</a></li>
	  <li><a href="recipe2.php">Meatballs</a></li>
	  <li><a href="calendar.php">Calendar</a></li>
	  <li>
	  <?php 
	  		if (isset($_SESSION['user'])) {
			echo $_SESSION['user'];
		} else {

			echo "<a href='login-page.php'>Login</a>";
		}
		?>
		 </li>
		    
	</ul>
	</nav>


</div>