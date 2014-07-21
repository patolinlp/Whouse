
$(function() {
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

		$("#welcome").click(function(){
			document.title = "Window House/Inicio";
			$("#subcontent").load("php/inicio.php");
			return false;
		});

		$("#who-are-us").click(function(){
			document.title = "Window House/Nosotros";
			$("#subcontent").load("php/nosotros.php");
			return false;
		});

		$("#galery").click(function(){
			document.title = "Window House/Galería";
			$("#subcontent").load("php/galeria.php");
			return false;
		});

		$("#service").click(function(){
			document.title = "Window House/Servicios";
			$("#subcontent").load("php/servicios.php");
			return false;
		});

		$("#us_work").click(function(){
			document.title = "Window House/Trabajos";
			$("#subcontent").load("php/trabajos.php");
			return false;
		});

		$("#contact").click(function(){
			document.title = "Window House/Contacto";
			$("#subcontent").load("php/contacto.php");
			return false;
		});
	});
	
});


