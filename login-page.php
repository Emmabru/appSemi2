<?php 
session_start();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Emma</title>
<link href="reset.css" rel="stylesheet" type="text/css">

</head>

<body>
<h1>Tasty recipe</h1>
<p> All in one bite</p>

<?php
   include 'navigation.php';
?>

<section>
	<h2>Login</h2>
	<p>
		     <form action='New_User.php' method="post">
        		<input type="submit" class="newuser" value="New User">
			</form>
		<form action="login.php" method='post'>
           	<h3> State your name and password: </h3>
       		<section>
                <input type="text" id="username" name="username" type="usernme" />
                <input type="text" id="password" name="password" type="password" />               
                <input type="submit" value="Login"/>
            </section> 
        </form>
 </p>
</section>

</body>
</html>