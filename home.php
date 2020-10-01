
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<style>

	.btn
{
	font-size: 2rem;
	padding: 1rem 0;
	width: 40rem;
	text-align: center;
	border: 0.1rem solid #56a5eb;
	margin-bottom: 1rem;
	text-decoration: none;
	color: #56a5eb;
	background-color: white;
	padding: 10px 20px;
}
.btn:hover
{
	cursor: pointer;
	box-shadow: 0 4px 16px 0 rgba(255,0,0,0.40), 0 6px 30px 0 rgba(255,0,0, 0.19);
	transform: translateY(-0.1rem);
	transition: transform 150ms;
}
.btn[disabled]:hover
{
	cursor: not-allowed;
	box-shadow: none;
	transform: none;
}

</style>
</head>
<body>

	<div id="navbar" style="border-bottom: 2px double red">
	  <a href="home.php" id="logo"><img src="image/images.jpg" alt="Profile PIc" width="70px" style="border-radius:50%;"></img></a>
	  <div id="navbar-right">
		<div style="float:left; padding:10px;">
			<h4 class="active name" href="#home"><?php echo $_SESSION['Name']; ?></h4>
			<h5 class="name"><?php echo $_SESSION['grade']; ?></h5>
			<h6 style="margin:0px;"><a href="logout.php" style="font-size:12px;">LOGOUT</a></h6>
		</div>
		<div style="float:right;padding:10px;">
			<a href="profile.php"><img src="Image/<?php echo ($_SESSION['pic']); ?>" alt="Profile PIc" width="40px" style="border-radius:50%;"></img></a>
		</div>
	  </div>
	  
	</div>


	<script>
	// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
		document.getElementById("navbar").style.padding = "0px 9px";
		document.getElementById("logo").style.fontSize = "25px";
	  } else {
		document.getElementById("navbar").style.padding = "0px 9px";
		document.getElementById("logo").style.fontSize = "35px";
	  }
	}
	</script>

	<div style="clear:both;"></div>

	<div style="background-color: #f1f1f1;" class="row">
	<div class="tab">
 		 <button class="tablinks" onclick="openCity(event, 'Scotch')" id="defaultOpen">Home</button>
 		 <button class="tablinks" onclick="openCity(event, 'Jack')">Test</button>
 		 <button class="tablinks" onclick="openCity(event, 'Civas')">Downloads</button>
 		 <button class="tablinks" onclick="openCity(event, 'Blow')">Popular Videos</button>
 		 <button class="tablinks" onclick="openCity(event, 'Blue')">Bookmarks</button>
	</div>
	<div style="padding-top:25px;">

	<div id="Scotch" class="tabcontent" >
		<div class="row grid scrollmenu">
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 1</a>
					<p>this is grid pattern</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 2</a>
					<p>this is another grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3 >Topic</h3>
					<a href="#">Lecture 3</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 4</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 5</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 6</a>
					<p>this is last grid</p>
				</div>
			
		</div>
	</div>


	<div id="Jack" class="tabcontent">
		<div class="row">
			<h1>TAKE A TEST</h1>
			<a class="btn" href="Quiz/game.html"> Play</a>
		</div>
	</div>
	
	<div id="Civas" class="tabcontent">
		<div class="row">
				<div class="bookmarks">
				<h1 class="bookmarkshead">Bookmarks</h1>
			</div>
			<div class="savedmain">
				<div class="saved">
					<h5 class="savedh4">DOWNLOADS</h5>
				</div>
				<hr>
				<h1></h1>
				<ul class="downloads" style="width:40%;float:left;margin-left:5%;">
					<li><a href="padai/ACN.pdf" download>Maths</a></li>
					<li><a href="padai/softcomputing.pdf" download>PHYSICS</a></li>
					<li><a href="padai/cloudcomputing.pdf" download>CHEMISTRY</a></li>
					<li><a href="padai/softcomputingbook.pdf" download>Maths Paper</a></li>
					<li><a href="padai/Datamining.pdf" download>Chemistry paper</a></li>
					<li><a href="padai/Unit1.pdf" download>Physics Paper</a></li>
				</ul>
				<div style="float:left;margin:0% 2%;">
				|</div>
				
				<ul class="downloads" style="width:40%;float:left;">
					<h4 style="padding-left:20px;">POPULAR DWONLOADS</h4>
					<li><a href="padai/ACN.pdf" download>Maths</a></li>
					<li><a href="padai/softcomputing.pdf" download>PHYSICS</a></li>
					<li><a href="padai/cloudcomputing.pdf" download>CHEMISTRY</a></li>
					<li><a href="padai/softcomputingbook.pdf" download>Maths Paper</a></li>
					<li><a href="padai/Datamining.pdf" download>Chemistry paper</a></li>
					<li><a href="padai/Unit1.pdf" download>Physics Paper</a></li>
				</ul>
			</div>
		</div>
		</div>
	</div>

	<div id="Blow" class="tabcontent">
			<div class="bookmarks">
				<h1 class="bookmarkshead">Videos</h1>
			</div>
			<div class="savedmain">
				<div class="saved">
					<h5 class="savedh4">Popular Clips</h5>
				</div>
				<hr>
			
			<div class="row grid scrollmenu">
				
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 1</a>
					<p>this is grid pattern</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 2</a>
					<p>this is another grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3 >Topic</h3>
					<a href="#">Lecture 3</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 4</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 5</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 6</a>
					<p>this is last grid</p>
				</div>
			</div>
		</div>
		
		<div class="savedmain">
				<div class="saved">
					<h5 class="savedh4">Browse Video Lessons</h5>
				</div>
				<hr>
			<h1 class="subjectname">MATHEMATICS</h1>
			<div class="row grid scrollmenu">
				
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 1</a>
					<p>this is grid pattern</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 2</a>
					<p>this is another grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3 >Topic</h3>
					<a href="#">Lecture 3</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 4</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 5</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 6</a>
					<p>this is last grid</p>
				</div>
			</div>
			
			<h1 class="subjectname">PHYSICS</h1>
			<div class="row grid scrollmenu">
				
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 1</a>
					<p>this is grid pattern</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 2</a>
					<p>this is another grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3 >Topic</h3>
					<a href="#">Lecture 3</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 4</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 5</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 6</a>
					<p>this is last grid</p>
				</div>
			</div>
			
			<h1 class="subjectname">CHEMISTRY</h1>
			<div class="row grid scrollmenu">
				
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 1</a>
					<p>this is grid pattern</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 2</a>
					<p>this is another grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3 >Topic</h3>
					<a href="#">Lecture 3</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 4</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 5</a>
					<p>this is last grid</p>
				</div>
				<div>
					<video src="video/movie.mp4" type="video/mp4" controls></video>
					<h3>Topic</h3>
					<a href="#">Lecture 6</a>
					<p>this is last grid</p>
				</div>
			</div>
		</div>
			
	</div>

	<div id="Blue" class="tabcontent">
		<div class="row">
			<div class="bookmarks">
				<h1 class="bookmarkshead">Bookmarks</h1>
			</div>
			<div class="savedmain">
				<div class="saved">
					<h5 class="savedh4">Saved Questions</h5>
				</div>
				<hr>
			</div>
		</div>
	</div>	

	<script>
		function openCity(evt, cityName) {
    	var i, tabcontent, tablinks;
    	tabcontent = document.getElementsByClassName("tabcontent");
    	for (i = 0; i < tabcontent.length; i++) {
    	    tabcontent[i].style.display = "none";
    	}
    	tablinks = document.getElementsByClassName("tablinks");
   		 for (i = 0; i < tablinks.length; i++) {
    	    tablinks[i].className = tablinks[i].className.replace(" active", "");
   		 }
    	document.getElementById(cityName).style.display = "block";
   		 evt.currentTarget.className += " active";
		}
		document.getElementById("defaultOpen").click();
	</script>
</div>

<div style="clear: both;"></div>


</body>
</html>
