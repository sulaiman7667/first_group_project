<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index-page/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<script src="index-page/index.js"></script>
	<title>No more noodles</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="body">

	<?php
		session_start();
		if (isset($_SESSION['user_id'])) {
			$logged_in = True;
		}
		else {
			// echo "<h1>Not logged in</h1>";
		}
	?>

	<!-- RECIPE IMAGES -->
	<div>
		<img src="index-page/recipe-img.jpg" class="img" id="img1">
		<img src="index-page/recipe-img2.jpg" class="img" id = "img2">
	</div>

	<!-- THE SIDEPANEL -->

	<div class="sidepanel-bg">
		<p class= "nomore-text sidepanel" id="no-more" style="cursor: default;">NO MORE &nbsp;
			<span>n</span>
			<span>o</span>
			<span>o</span>
			<span>d</span>
			<span>l</span>
			<span>e</span>
			<span>s</span>
			<span>!</span>
		</p>
		<p id="intro-text" class="sidepanel">Explore Easy and fast cooking recipes that are delicate<br>and exquisite. Search recipes, ingredients, and <br>cuisines below:<br><br>
		<!-- <div class="searchbar"> -->
			<form class="form" method = "POST" action="search-results-page/search.php">
		    	<input class="searchbar" type="text" placeholder="Search recipes..." name="search" required>
		    	<button type="submit"><i class="fa fa-search"></i></button>
		    </form>
		<!-- </div> -->
		</p>
	</div>

 	<!-- NAVIGATION PANEL -->
	<img src="index-page/black-img.jpg" id="black-img" class="opacify-animation">
	<img src="index-page/logo.png" id="logo" class="opacify-animation">
	<a href="registration-page/registration.php" class="navigation opacify-animation">Login/Register</a>
	<a onclick="openForm()" class="navigation opacify-animation">Faq</a>
	<a href="recipes-page/recipes.html" class="navigation opacify-animation" id="dropdown">Recipes</a>
	<a href="index.php" id="Home" class="navigation opacify-animation">Home</a>


	


	<!-- SUGGESTED RECIPES HEADER -->
	<p class = "suggested-recipes-text opacify-animation">Suggested Recipes</p>
	<p class = "suggested-recipes-text opacify-animation" id="symbol">&#8711;</p>
	<!-- FAQ -->
	<div id="FAQ" class="FAQ">
		<div>

		</div>
		<div>
			<a onclick="closeForm()" id="x-button">X</a>
		</div>
		<br>
		<p class="question">1. bla bla bla bla?</p>
		<p class="answer">bla bla bla bla?</p>
		<p class="question">2.bla bla bla bla? bla bla bla bla?</p>
		<p class="answer">bla bla bla bla?</p>
		<p class="question">3. bla bla bla bla? bla bla bla bla?</p>
		<p class="answer">bla bla bla bla?</p>
		<p class="question">4. bla bla bla bla? bla bla bla bla? bla bla bla bla? bla bla bla bla? bla bla bla bla?</p>
		<p class="answer">bla bla bla bla?</p>

	</div>
		<div class="rotating-images-bg opacify-animation"></div>
		<div id="rotating-images" class="rotating-images opacify-animation">
			<span style="--i:1"><a href="#"><img class="opacify-animation" src="index-page/recipe-img.jpg"></a></span>
			<span style="--i:2"><a href="#"><img class="opacify-animation" src="index-page/recipe-img2.jpg"></a></span>
			<span style="--i:3"><a href="#"><img class="opacify-animation" src="index-page/recipe-img.jpg"></a></span>
			<span style="--i:4"><a href="#"><img class="opacify-animation" src="index-page/recipe-img2.jpg"></a></span>
			<span style="--i:5"><a href="#"><img class="opacify-animation" src="index-page/recipe-img.jpg"></a></span>
			<span style="--i:6"><a href="#"><img class="opacify-animation" src="index-page/recipe-img2.jpg"></a></span>
			<span style="--i:7"><a href="#"><img class="opacify-animation" src="index-page/recipe-img.jpg"></a></span>
			<span style="--i:8"><a href="#"><img class="opacify-animation" src="index-page/recipe-img2.jpg"></a></span>
		</div>


</body>
</html>
