<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<script src="index.js"></script>
	<title>No more noodles</title>
</head>

<body id="body">

	<!-- RECIPE IMAGES -->
	<div>
		<img src="recipe-img.jpg" class="img" id="img1">
		<img src="recipe-img2.jpg" class="img" id = "img2">
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
		<p id="intro-text" class="sidepanel">Explore Easy and fast cooking recipes that are delicate<br>and exquisite. Search recipes, ingredients, and <br>cuisines below:<br><br><input type="text" name="search" placeholder="Search recipes..." id="searchbar"></p>
	</div>

 	<!-- NAVIGATION PANEL -->
	<img src="black-img.jpg" id="black-img" class="opacify-animation">
	<img src="logo.png" id="logo" class="opacify-animation">
	<a href="index.html" id="Home" class="navigation opacify-animation">Home</a>
	<a href="../recipes-page/recipes.html" class="navigation opacify-animation" id="dropdown">Recipes</a>
	<a onclick="openForm()" class="navigation opacify-animation">Faq</a>
	<a href="/first_group_project/login/registration.php" class="navigation opacify-animation">Login/Register</a>
	<div class="tag">
		<a href="" class="dropdown-items" id="drop1">breakfast</a>
		<a href="" class="dropdown-items" id ="drop2">lunch</a>
		<a href="" class="dropdown-items" id="drop3">dinner</a>
		<a href="" class="dropdown-items" id="drop4">recipe3</a>
		<a href="" class="dropdown-items" id="drop5">recipe4</a>
		<div id="symbol-dropdown" class="opacify-animation">&#8711;</div>
	</div>
	

	<!-- SUGGESTED RECIPES HEADER -->
	<p class = "suggested-recipes-text opacify-animation" id="title1">S</p>
	<p class = "suggested-recipes-text opacify-animation" id="title2">u</p>
	<p class = "suggested-recipes-text opacify-animation" id="title3">g</p>
	<p class = "suggested-recipes-text opacify-animation" id="title4">g</p>
	<p class = "suggested-recipes-text opacify-animation" id="title5">e</p>
	<p class = "suggested-recipes-text opacify-animation" id="title6">s</p>
	<p class = "suggested-recipes-text opacify-animation" id="title7">t</p>
	<p class = "suggested-recipes-text opacify-animation" id="title8">e</p>
	<p class = "suggested-recipes-text opacify-animation" id="title9">d</p>
	<p class = "suggested-recipes-text opacify-animation" id="title10">R</p>
	<p class = "suggested-recipes-text opacify-animation" id="title11">e</p>
	<p class = "suggested-recipes-text opacify-animation" id="title12">c</p>
	<p class = "suggested-recipes-text opacify-animation" id="title13">i</p>
	<p class = "suggested-recipes-text opacify-animation" id="title14">p</p>
	<p class = "suggested-recipes-text opacify-animation" id="title15">e</p>
	<p class = "suggested-recipes-text opacify-animation" id="title16">s</p>
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
			<span style="--i:1"><a href="#"><img class="opacify-animation" src="recipe-img.jpg"></a></span>
			<span style="--i:2"><a href="#"><img class="opacify-animation" src="recipe-img2.jpg"></a></span>
			<span style="--i:3"><a href="#"><img class="opacify-animation" src="recipe-img.jpg"></a></span>
			<span style="--i:4"><a href="#"><img class="opacify-animation" src="recipe-img2.jpg"></a></span>	
			<span style="--i:5"><a href="#"><img class="opacify-animation" src="recipe-img.jpg"></a></span>	
			<span style="--i:6"><a href="#"><img class="opacify-animation" src="recipe-img2.jpg"></a></span>	
			<span style="--i:7"><a href="#"><img class="opacify-animation" src="recipe-img.jpg"></a></span>	
			<span style="--i:8"><a href="#"><img class="opacify-animation" src="recipe-img2.jpg"></a></span>
		</div>

	
</body>
</html>



