<?php


?>
<html>
	<head>
		<meta charset="utf-8" />

		<!-- Javascript -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="fancyBox/lib/jquery.mousewheel.pack.js"></script>
		<script type="text/javascript" src="fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		<script type="text/javascript" src="js/events.js"></script>

		<!-- Optionally add helpers - button, thumbnail and/or media -->
		
		<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
		<script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<link rel="stylesheet" href="fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<link rel="stylesheet" href="fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<link rel="stylesheet" href="fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" >
		
		<script type="text/javascript">

			$(document).ready(function() {
				$(".fancybox").attr('rel', 'gallery').fancybox(
					
					{beforeLoad: function() {this.title = $(this.element).attr('caption');}},
					{helpers : {	overlay : {css : {'background' : ' rgba(0, 1, 26, 0.8)'}}}},
					{helpers : {	overlay : {locked : true}}}
				);
				

			});
		</script>

		

	</head>

	<body>
		<div>
			<div>
				<a class="fancybox"  caption="Titulo1" href="images/galery/image1_b.jpg"><img src="images/galery/image1_s.jpg" alt=""></a>
				<a class="fancybox"  caption="Titulo2" href="images/galery/image2_b.png"><img src="images/galery/image2_s.png" alt=""></a>
				<a class="fancybox"  caption="Titulo3" href="images/galery/image3_b.jpg"><img src="images/galery/image3_s.jpg" alt=""></a>
				<a class="fancybox"  caption="Titulo4" href="images/galery/image4_b.png"><img src="images/galery/image4_s.png" alt=""></a>

			</div>
		</div>

	</body>
</html>
