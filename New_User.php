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
	<h2>Sign up</h2>
	<p>
		<form action='newUser.php' method='post'>
           	<h3> State your name and password, ONLY using letters: </h3>
       		<section>
                <input type="text" id="username" name="username" type="username" />
                <input type="text" id="password" name="password" type="password" />               
                <input type="submit" value="Sign up"/>
                
            </section> 

        </form>

 </p>
</section>

</body>
</html>