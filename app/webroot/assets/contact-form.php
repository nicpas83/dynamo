<?php
	
	$errors = array();

	// Check if name has been entered
	if (!isset($_POST['name'])) {
		$errors['name'] = 'Por favor ingresá tu Nombre';
	}
	
	// Check if email has been entered and is valid
	if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Por favor ingresá un email válido';
	}
	
	//Check if message has been entered
	if (!isset($_POST['massage'])) {
		$errors['message'] = 'Por favor ingresá un mensaje';
	}

	$errorOutput = '';

	if(!empty($errors)){

		$errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
 		$errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

		$errorOutput  .= '<ul>';

		foreach ($errors as $key => $value) {
			$errorOutput .= '<li>'.$value.'</li>';
		}

		$errorOutput .= '</ul>';
		$errorOutput .= '</div>';

		echo $errorOutput;
		die();
	}



	$name = $_POST['name'];
	$email = $_POST['email'];
	$tipo = $_POST['tipo'];
	$message = $_POST['massage'];
	$from = $email;
	$to = 'ch.barbara@gmail.com';  // please change this email id
	$subject = 'Contacto Web - dynamo diseño';
	
	$body = "From: $name\n E-Mail: $email\n Tipo: $tipo\n Message:\n $message";


	//send the email
	$result = '';
	if (mail ($to, $subject, $body)) {
		$result .= '<div class="alert alert-success alert-dismissible" role="alert">';
 		$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		$result .= 'Muchas gracias! Tu mensaje fue enviado';
		$result .= '</div>';

		echo $result;
		die();
	}

	$result = '';
	$result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
	$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
	$result .= 'Sucedió un error, por favor intentá de nuevo.';
	$result .= '</div>';

	echo $result;
	