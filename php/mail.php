<?php
	
	if(isset($_POST['email'])) {

		// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
		$email_to = "patolinlp@hotmail.com";
		$email_subject = "Contacto desde el sitio web";

		// Aquí se deberían validar los datos ingresados por el usuario
		if(!isset($_POST['nombre']) ||
			!isset($_POST['email']) ||
			!isset($_POST['telefono']) 	||
			!isset($_POST['textarea'])) {

			echo json_encode(false);
			die();
		}

		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
		$email_message .= "E-mail: " . $_POST['email'] . "\n";
		$email_message .= "Teléfono: " . $_POST['telefono'] . "\n\n";
		$email_message .= "Comentarios: " . $_POST['textarea'] . "\n\n";


		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		mail($email_to, $email_subject, $email_message, $headers);
		ob_clean();
		echo json_encode(true);
	}

	else{
		echo json_encode(false);
		die();
	}

?>