<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Michelle Bushoy - Portfolio</title>

  <!-- CSS  -->
  	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!--   	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Source+Sans+Pro" rel="stylesheet">
</head>

<body>

<!-- Nav bar -->
<?php include "includes/nav.inc"; ?>
<!-- End nav -->




<!-- Welcome Section -->
<div class="intro">
	<div class="row" id="hi">

			<div class="pic col-md-5 justify-content-center">
				<img class="me rounded-circle" alt="Photo of Michelle Bushoy" src="images/michelle.jpg">
			</div>

			<div class="about col-md-7">
				<br>
				<br>

				<div class="about-intro">
					<p>Welcome! </p>
					<p class="name">I'm Michelle.</p>
				</div>

				<p class="about-text">I'm a Senior at <a class="school">University of Rochester</a> studying Digital Media and Computer Science, with a concentration in Web Development. I'm passionate about the intersection between code and design. I appreciate list-making and the "Notes" app on my iPhone.  
				<br><br>
				In my free time, I love hanging out with my family's Irish Setter, Archie, 
				and biking. I also love cooking, which I rarely have the chance to do in my University dorm. </p>
				<br>
			</div>

	</div>
</div> 


<hr>

<!-- Work Portfolio Section -->


<div class="container work" id="work">
	<div id="filterSelection">
	 	<a class="filt active" onclick="filter('all')">Show all</a>
	  	<a class="filt" onclick="filter('code')">Coding</a>
	  	<a class="filt" onclick="filter('design')">Design</a>
	</div>
	<br>

	<div class="workGallery">
		<div class="row">
			<?php include "work/w1.php"; ?>
			<?php include "work/w4.php"; ?>

			<div class="col-md-6 filterWork code">
				<img src="images/student1.png"  data-toggle="modal" data-target="#modalOne" id="work1" class="work1 img-responsive">
			</div>

			<div class="col-md-6 filterWork code ">
				<img src="images/football2.png"  data-toggle="modal" data-target="#modalFour" class="work1 img-responsive">
			</div>
		</div>

		<div class="row">
			<?php include "work/w6.php"; ?>			
			<?php include "work/w2.php"; ?>

			<div class="col-md-6 filterWork design code ">
				<img src="images/quicken2.png"  data-toggle="modal" data-target="#modalSix" class="work1 img-responsive">
			</div>

			<div class="col-md-6 filterWork design code ">
				<img src="images/sisosig2.png"  data-toggle="modal" data-target="#modalTwo" id="work1" class="work1 img-responsive">
			</div>
		</div>

		<div class="row">
			<?php include "work/w3.php"; ?>		
			<?php include "work/w5.php"; ?>

			<div class="col-md-6 filterWork design">
				<img src="images/hurts3.png"  data-toggle="modal" data-target="#modalThree" id="work3" class="work1 img-responsive">
			</div>

			<div class="col-md-6 filterWork design">
				<img src="images/fdb2.png" data-toggle="modal" data-target="#modalFive" class="work1 img-responsive">
			</div>
		</div>

	</div>
</div>

<script>
	$('#myModal').on('shown.bs.modal', function () {
  		$('#myInput').trigger('focus')
	})

</script>

<script>
	filter("all")
	function filter(c) {
	  var filt;
	  var i;
	  filt = document.getElementsByClassName("filterWork");
	  if (c == "all") c = "";
	  for (i = 0; i < filt.length; i++) {
	    RemoveClass(filt[i], "show");
	    if (filt[i].className.indexOf(c) > -1) AddClass(filt[i], "show");
	  }
	}

	function AddClass(element, name) {
	  var i;
	  var arr1;
	  var arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
	    if (arr1.indexOf(arr2[i]) == -1) {
	      element.className += " " + arr2[i];
	    }
	  }
	}

	function RemoveClass(element, name) {
	  var i;
	  var arr1;
	  var arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
	    while (arr1.indexOf(arr2[i]) > -1) {
	      arr1.splice(arr1.indexOf(arr2[i]), 1); 
	    }
	  }
	  element.className = arr1.join(" ");
	}

	var btnContainer = document.getElementById("filterSelection");
	var btns = btnContainer.getElementsByClassName("filt");

	for (var i = 0; i < btns.length; i++) {
	  	btns[i].addEventListener("click", function() {
	    	var current = document.getElementsByClassName("active");
	    	if (current.length > 0) {
	    		current[0].className = current[0].className.replace("active", "");
	    	}
	    	this.className += " active";
	  	});
	}
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

<!-- Footer -->
<?php include "includes/footer.inc"; ?>
<!-- End Footer -->
