<?php

?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/controlContacto.js"></script>

		<!-- Javascript -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/events.js"></script>
		<script type="text/javascript" src="js/control.js"></script>
		<!-- Style css -->
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>

	<body>
		<div id="section_banner" class="box-shadow">
			<h1><i class="fa fa-phone"></i> Contáctenos</h1>
		</div>

		<div id="text">
			<div id="subtitle">
				<h1>Contacto</h1>
				<div id="subtitle_separation">
				</div>
			</div>

			<div id="text_content">
				<p> Si le interesa nuestros trabajo y servicios, por favor contáctanos.</p>
			</div>
		</div>

		<div id="double_section" class="complete-section">
			<div id="text" class="half-section left">
				<div id="subtitle">
					<h1><i class="fa fa-book"></i> Información de Contacto</h1>
				</div>
				<div id="input" class="definition left">
					<p>Dirección</p>
					<label id ="direction">Camilo Henriquez 797-A</label>
				</div>
				<div id="input" class="definition left">
					<p>Teléfono</p>
					<label id ="telefono">78069897/7887492/79658246</label>
				</div>
				<div id="input" class="definition left">
					<p>Email</p>
					<label id="email">windowhouseltda@gmail.com</label>
				</div>

				<div id="map_canvas" class="complete-section"> </div>
			</div>


			<div id="text" class="half-section left">
				<div id="subtitle">
					<h1> <i class="fa fa-envelope-o"></i> Envíenos un Mensaje</h1>
				</div>
				<div id="input" class="">
					<p>Nombre</p>
					<input type="text" id="nombre" />
				</div>
				<div id="input" class="">
					<p>Email</p>
					<input type="text" id="email"/>
				</div>
				<div id="input" class="">
					<p>Teléfono</p>
					<input type="text" id="telefono"/>
				</div>
				<div id="input" class="">
					<p>Mensaje</p>
					<textarea rows="6" id="textarea"></textarea>
				</div>
				<div id="button">
					<button id="enviarmail">Enviar</button>
				</div>

			</div>
		</div>
	</body>
</html>