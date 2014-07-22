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
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<script type="text/javascript">
			$(document).ready(function (){

				$("#owl-demo").owlCarousel({

					// "singleItem:true" is a shortcut for:
					//items : 4
					// itemsDesktop : false,
					// itemsDesktopSmall : false,
					// itemsTablet: false,
					// itemsMobile : false

					navigation : false, // Show next and prev buttons
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true,
					autoPlay: true
				});
			});
		</script>
		

		
	</head>

	<body>
		<div id="galery_photos">
			<div id="owl-demo" class="owl-carousel owl-theme">
			    <div class="item">
			      <img src="images/carousel/imagen1.jpg" alt="Owl Image">
			    </div>
			    <div class="item">
			      <img src="images/carousel/imagen2.jpg" alt="Owl Image">
			    </div>
			    <div class="item">
			      <img src="images/carousel/imagen3.jpg" alt="Owl Image">
			    </div>
			    <div class="item">
			      <img src="images/carousel/imagen4.jpg" alt="Owl Image">
			    </div>
			</div>
		</div>

		<div id="legend">
			<h1>"FOTOGRAFIAR ES COLOCAR LA CABEZA, EL OJO Y EL CORAZÓN EN UN MISMO EJE"</h1>
		</div>
	</body>

</html>