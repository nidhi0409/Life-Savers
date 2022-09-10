<?php
include('connection.php');  
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/d1e531bf97.js" crossorigin="anonymous"></script>

	<title>LifeSavers</title>
</head>
<body>
		<div class="navbar">
			<div class="left">
				<img src="signage-organ-donation-blood-hospital-symbol.png" width="50px" height="50px">
			</div>
			<div class="right">
				<div class="dropdown">
			    	<button class="dropbtn">About
			      	<i class="fa fa-caret-down"></i>
			    	</button>
			    	<div class="dropdown-content">
			      		<a href="#">Link 1</a>
			      		<a href="#">Link 2</a>
			      		<a href="#">Link 3</a>
			    	</div>
		  		</div>
			  <a href="needblood.php">Need Blood</a>
			  <a href="locatebloodbank.php">Donate Blood</a>
			  <a href="loginform.php">Login</a>
			  <a href="signup.php">Register</a>
		 	</div> 
		</div>
	<div class="slideshow-container">

		<div class="mySlides fade">
		  <img src="shutterstock_1586903512-1.jpg" height="100%" width="100%">
		</div>

		<div class="mySlides fade">

		  <img src="bd.png" width="100%" height = "100%">
		</div>

		<div class="mySlides fade">

		  <img src="5871867.png" width="100%" height= "100%">
		</div>


		<a class="prev" onclick="plusSlides(-1)">❮</a>
		<a class="next" onclick="plusSlides(1)">❯</a>
	</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="mid_bar">
	<div>
		<button class="button-82-pushable" role="button">
		  <span class="button-82-shadow"></span>
		  <span class="button-82-edge"></span>
		  <span class="button-82-front text">
		   <a href="locatebloodbank.php"><script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/oyclgnwc.json"
    trigger="loop"
    colors="primary:#ffffff,secondary:#ffffff"
    style="width:40px;height:40px">
</lord-icon> Donate Blood </a>
		  </span>
		</button>
	</div>
	<div>
		<button class="button-82-pushable" role="button">
		  <span class="button-82-shadow"></span>
		  <span class="button-82-edge"></span>
		  <span class="button-82-front text">
		    <a href="needblood.php"><script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/oyclgnwc.json"
    trigger="loop"
    colors="primary:#ffffff,secondary:#ffffff"
    style="width:40px;height:40px">
</lord-icon> Need Blood </a>
		  </span>
		</button>
	</div>
	<div>
		<button class="button-82-pushable" role="button">
		  <span class="button-82-shadow"></span>
		  <span class="button-82-edge"></span>
		  <span class="button-82-front text">
		    <a href="locatebloodbank.php"><script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/zzcjjxew.json"
    trigger="loop"
    colors="primary:#ffffff,secondary:#ffffff"
    style="width:40px;height:40px">
</lord-icon> Locate Blood-Bank </a>
		  </span>
		</button>
	</div>
</div>
<div class="learn" id="about">
	<h1>Learn About Blood Donation</h1>
</div>
	<div class="learn_content">
		<div class="left">
			<img src="save-3.png" width="700px" height="500px">
			<h3>After donating blood, the body works to replenish the blood loss. This stimulates the production of new blood cells and in turn, helps in maintaining good health.</h3>
		</div>
		<div class="right">
			<table>
				<tr>
					<th colspan="3" style="color:white;background-color:red;">Compatible Blood Type Donors</th>
				</tr>
				<tr>
					<td><b>Blood Type</b></td>
					<td><b>Donate Blood To</b></td>
					<td><b>Receive Blood From</b></td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>A+</b></span></td>
					<td>A+ AB+</td>
					<td>A+ A- O+ O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>O+</b></span></td>
					<td>O+ A+ B+ AB+</td>
					<td>O+ O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>B+</b></span></td>
					<td>B+ AB+</td>
					<td>B+ B- O+ O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>AB+</b></span></td>
					<td>AB+</td>
					<td>Everyone</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>A-</b></span></td>
					<td>A+ A- AB+ AB-</td>
					<td>A- O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>O-</b></span></td>
					<td>Everyone</td>
					<td>O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>B-</b></span></td>
					<td>B+ B- AB+ AB-</td>
					<td>B- O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>AB-</b></span></td>
					<td>AB+ AB-</td>
					<td>AB- A- B- O-</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="mid_donate">
		<br>
		<button class="donate"><a href="locatebloodbank.php"><i class="fa fa-tint" aria-hidden="true"></i> Donate Blood</a></button>
	</div>
	<div class="types_of_donation">
		<h1>Types Of Donation</h1>
	</div>
	<div class="tod_content">
		<p>The human body contains five liters of blood, which is made of several useful components i.e.<b> Whole blood</b>, <b>Platelet</b>, and <b>Plasma</b>.</p>
		<p>Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.</p>
		<p>For <b>plasma</b> and <b>platelet</b> donation you must have donated whole blood in past two years.</p>
		<br>
		<br>
		<br>
	</div>
	<div class="ff">
	<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1 style="color: white; padding-top: 130px;">Whole Blood</h1>
    </div>
    <div class="flip-card-back">
      <h2>What is it?</h2>
        <p>Blood Collected straight from the donor after its donation usually separated into red blood cells, platelets, and plasma.</p>
        <br>
        <h2>User For?</h2>
        <p>Stomach disease, kidney disease, childbirth, operations, blood loss, trauma, cancer, blood diseases, haemophilia, anemia, heart disease.</p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1 style="color: white; padding-top: 130px;">Platelet</h1>
    </div>
    <div class="flip-card-back">
      <h2>What is it?</h2>
        <p>The tiny 'plates' in blood that wedge together to help to clot and reduce bleeding. Vital for people with low platelet count, like malaria and cancer patients.</p>
        <h2>User For?</h2>
        <p>Cancer, blood diseases, haemophilia, anaemia, heart disease, stomach disease, kidney disease, childbirth, operations, blood loss, trauma, burns.</p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1 style="color: white; padding-top: 130px;">Plasma</h1>
    </div>
    <div class="flip-card-back">
      <h2>What is it?</h2>
        <p>Plasma is the liquid portion of blood. About 55% of our blood is plasma, and the remaining 45% are red blood cells, white blood cells and platelets that are suspended in the plasma.</p>
        <h2>User For?</h2>
        <p>Immune system conditions, pregnancy (including anti-D injections), bleeding, shock, burns, muscle and nerve conditions, haemophilia, immunisations.</p>
    </div>
  </div>
</div>
</div>
	<div class="footer">
		<div class="need" style="padding-top: 20px;">
			<h3>Looking For blood?</h3>
			<ul style="list-style: none;">
				<li><a href="needblood.php" style="text-decoration: none; color: white;">Search for donors</a></li>
				<li><a href="locatebloodbank.php" style="text-decoration: none; color: white;">Nearest Blood Bank</a></li>
		</div>
		<div class="give" style="padding-top: 20px;">
			<h3>Want to donate?</h3>
			<ul style="list-style: none;">
				<li><a href="locatebloodbank.php" style="text-decoration: none; color: white;">Donate now</a></li>
				<li><a href="locatebloodbank.php" style="text-decoration: none; color: white;">Nearest Blood Bank</a></li>
				<li><a href="#about" style="text-decoration: none; color: white;">About Donation</a></li>
		</div>
		<div class="us" style="padding-top: 20px;">
			<h3>About Us</h3>
			<ul style="list-style: none;">
				<li><a href="#" style="text-decoration: none; color: white;">About Lifesavers</a></li>
				<li><a href="#" style="text-decoration: none; color: white;">Contact Us</a></li>
				<li><a href="#" style="text-decoration: none; color: white;">Gallery</a></li>
		</div>
	</div>
	<div class="made" style="background: var(--gray-dark); color: white; text-align: center; padding-bottom: 30px; line-height: 35px;">
		<h4>Made with <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
			<lord-icon
			    src="https://cdn.lordicon.com/iwaotjbp.json"
			    trigger="loop"
			    colors="primary:#c71f16,secondary:#ebe6ef"
			    style="width:40px;height:40px">
			</lord-icon> by Nidhi & Anshul
		</h4>
		<p>
			<b>Disclaimer</b>:- This is only for Educational Purpose Only.
		</p>

	</div>

<script>
	var slideIndex = 0;
	showSlides();
	//add the global timer variable
	var slides,dots,timer;

	function showSlides() {
	    var i;
	    slides = document.getElementsByClassName("mySlides");
	    dots = document.getElementsByClassName("dot");
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    slideIndex++;
	    if (slideIndex> slides.length) {slideIndex = 1}    
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[slideIndex-1].style.display = "block";  
	    dots[slideIndex-1].className += " active";
	    //put the timeout in the timer variable
	    timer = setTimeout(showSlides, 4000); // Change image every 8 seconds
	}

	function plusSlides(position) {
	    //clear/stop the timer
	    clearTimeout(timer);
	    slideIndex +=position;
	    if (slideIndex> slides.length) {slideIndex = 1}
	    else if(slideIndex<1){slideIndex = slides.length}
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[slideIndex-1].style.display = "block";  
	    dots[slideIndex-1].className += " active";
	    //create a new timer
	    timer = setTimeout(showSlides, 4000);
	}

	function currentSlide(index) {
	    //clear/stop the timer
	    clearTimeout(timer);
	    if (index> slides.length) {index = 1}
	    else if(index<1){index = slides.length}
	    //set the slideIndex with the index of the function
	    slideIndex = index;
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[index-1].style.display = "block";  
	    dots[index-1].className += " active";
	    //create a new timer
	    timer = setTimeout(showSlides, 4000);
	}
</script>

</body>
</html>