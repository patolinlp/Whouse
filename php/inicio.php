<?php

?>

<html>

	<head>
		<!-- Javascript -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/events.js"></script>
		<script type="text/javascript" src="js/control.js"></script>

		<!-- Style css -->
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

		<script type="text/javascript">
			$(document).ready(function (){

				$("#owl-demo").owlCarousel({
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true,
					autoPlay: true,
					pagination: false
				});
			});
		</script>
		

		
	</head>

	<body>
		<div id="galery_photos" class= "box-shadow shadow_photo">
			<div id="owl-demo" class="owl-carousel owl-theme">
			    <div class="item">
			      <img src="images/carousel/h1.jpg" alt="Owl Image">
			    </div>
			    <div class="item">
			      <img src="images/carousel/h2.jpg" alt="Owl Image">
			    </div>
			    <div class="item">
			      <img src="images/carousel/h3.jpg" alt="Owl Image">
			    </div>
			    <div class="item">
			      <img src="images/carousel/h4.jpg" alt="Owl Image">
			    </div>
			</div>
		</div>

		<div id="legend" class= "box-shadow">
			<h1>Calidad superior en aislamiento termico y acustico en ventanas en PVC y Deck de alto rendimiento en madera "WPC"</h1>
		</div>
	</body>

</html>