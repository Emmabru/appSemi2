<?php

session_start();
$recipe = 2;
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Emma</title>
<link rel="stylesheet" type="text/css" href="reset.css">

</head>

<body>
<h1>Tasty recipe</h1>
<p> All in one bite</p>
<?php
   include 'navigation.php';
?>


<section class="recipe">
	<h2>Meatballs</h2>

	<div class="recipe-top-section">
		<div class="ingredienser"> 
			<h3>Ingredients</h3>
			<ul>
				<li><b>1 lb lean (at least 80%) ground beef</b></li>
				<li><b>1/2 cup Progresso™ Italian-style bread crumbs</b></li>
				<li><b>1/4 cup milk</b></li>
				<li><b>1/2 teaspoon salt</b></li>
				<li><b>1/2 teaspoon Worcestershire sauce</b></li>
				<li><b>1/4 teaspoon pepper</b></li>
				<li><b>1 small onion, finely chopped (1/4 cup)</b></li>
				<li><b>1 egg</b></li> 
			</ul> 
		</div>

		<div class="meal-pic" >
			<img src="kottbullar.jpg" alt="Meatballs" style="width:50%; height:50%;"> 
		</div>
	</div>

	<div class="recipe-description">
		<h3>HOW TO DO</h3>
		<p>
		 Heat oven to 400°F. Line 13x9-inch pan with foil; spray with cooking spray. In large bowl, mix all ingredients. Shape mixture into 20 to 24 (1 1/2-inch) meatballs. Place 1 inch apart in pan. Bake uncovered 18 to 22 minutes or until no longer pink in center.
		 </p>
	</div>

	<div class="comments_section">
<h3>Comments</h3>
			<div class="comment_new">
		 		 <?php
		 		 if (isset($_SESSION['user'])) {
				
				
				echo "<br>
			 	<form action='addComment.php' method='post'>
				  <input type='hidden' name='username' value=" .
				  $_SESSION['user']. " />
				  <input type='text' name='user_comment' value='Write your comment here'><br><br>
				  <input type='submit' value='Submit'>
				</form>";
				
			} else {
				echo "Youre not logged in";
			} ?>

			<br><br>
			</div>

	 	<div class="comment">


	 			<?php
  					 include 'getComments.php';
				?>
	 	</div>

	</div>
</section>

</body>
</html>