<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Emma</title>
<link rel="stylesheet" type="text/css" href="reset.css">

</head>

<body><nav>
<!--#include file="header.html"-->
<h1>Tasty recipe</h1>
<p> All in one bite</p>

<?php
   include 'navigation.php';
?>

</nav>

<section>
	<h2>Tips on recipes depending on the date!</h2>
 	<p class="calDesc">Click on an image of a meal, and you'll find the recipe</p>
 <div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      August<br>
      <div class="year">2017</div>
    </li>
  </ul>
</div>

	<ul class="weekdays">
	  <li>Mo</li>
	  <li>Tu</li>
	  <li>We</li>
	  <li>Th</li>
	  <li>Fr</li>
	  <li>Sa</li>
	  <li>Su</li>
	</ul>

	<ul class="days">
	  <li>1</li>
	  <li>2</li>
	  <li>3</li>
	  <li>4</li>
	  <li>5</li>
	  <li>6</li>
	  <li>7</li>
	  <li>8</li>
	  <li>9</li>
	  <li><span class="active">10</span></li>
	  <li>11</li>
	  <li>12</li>
	  <li>13</li>
	  <li>14</li>
	  <li>15</li>
	  <li>16</li>
	  <li>17</li>
	  <li>18<a href="recipe.html"> <img src="pannkakor.jpg" alt="Pancakes" class="calendPic"></a></li>
	  <li>19</li>
	  <li>20</li>
	  <li>21</li>
	  <li>22</li>
	  <li>23 <a href="recipe2.html"> <img src="kottbullar.jpg" alt="Meatballs" class="calendPic"></a></li>
	  <li>24</li>
	  <li>25</li>
	  <li>26</li>
	  <li>27</li>
	  <li>28</li>
	  <li>29</li>
	  <li>30</li>
	  <li>31</li>
	</ul> 


</section>
</body>
</html>