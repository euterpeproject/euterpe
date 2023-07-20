<!DOCTYPE HTML>
<html>
	<head manifest="/manifiesto/manifiesto.cache">
		<title>Euterpe Metal</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Euterpe Death" />
		<meta name="keywords" content="Weblog, blog, Euterpe Death, Musica, Metal" />

		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/estilo.css" type="text/css" />

	</head>
	<body>

		<div class="container-fluid" itempscope itemtype="http://www.data-vocabulary.org/Person">
		
		<header>
			<div>
				<h1>E<span class="ocultar">''</span>U<span class="ocultar">''</span>T<span class="ocultar">''</span>E<span class="ocultar">''</span>R<span class="ocultar">''</span>P<span class="ocultar">'</span><span class="inline-block">E</span></h1>
			</div>
		</header>
		
			<div id="contenido">
			<hr><hr class="hr2">

			<nav class="navbar navbar-expand-lg text-center">
				<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary text-center"> -->
					<div class="container">
					<a class="navbar-brand" href="#"></a>
					<button class="navbar-toggler button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
						<li class="nav-item">
							<a href="index.html" class="link anchor"><canvas class="canvas" id="iconoinicio" width="50" height="50"></canvas><br />INICIO</a>
						</li>
						<li class="nav-item">
							<a href="musica.html" class="link anchor"><canvas class="canvas" id="iconomusica" width="50" height="50"></canvas><br />MÚSICA</a>
						</li>
						<li class="nav-item">
							<a href="sobremi.html" class="link anchor"><canvas class="canvas" id="iconosobreMi" width="50" height="50"></canvas><br />EUTERPE</a>
						</li>
						<li class="nav-item">
							<a href="contacto.html" class="link anchor"><canvas class="canvas" id="iconocontacto" width="50" height="50"></canvas><br />CONTACTO</a>
						</li>
						</ul><br>
					</div>
					</div>
			</nav>

			<hr><hr class="hr2">

		<div id="php">

		<?php
			//Recibo las variables de formulario

			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			$mensaje = $_POST['mensaje'];

			//Te muestro las variables

			echo "<br />";
			echo "<h3> '   'El mensaje que has enviado es:</h3>";
			echo "<br />";
			echo "<h4>'  'Nombre: ";
			echo $nombre;
			echo "<br />";
			echo " '  'Email: ";
			echo $email;
			echo "<br />";
			echo " '  'Mensaje: ";
			echo $mensaje;
			echo "</h4>";

			//Envio un email

			$mensajemail = $nombre." con el email ".$email." te ha enviado un mensaje que dice: ".$mensaje;

			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;

			require 'phpmailer/Exception.php';
			require 'phpmailer/PHPMailer.php';
			require 'phpmailer/SMTP.php';

			//Create an instance; passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
				//Server settings                  
				$mail->SMTPDebug = 0;                                       
				$mail->isSMTP();                                            
				$mail->Host       = 'smtp.gmail.com';                       
				$mail->SMTPAuth   = true;                                   
				$mail->Username   = 'vitr2o@gmail.com';                     
				$mail->Password   = '';                               
				$mail->SMTPSecure = 'tls';                                  
				// $mail->Port       = 465;                                 
				$mail->Port       = 587;                                        
				$mail->setFrom($email, $nombre);
				$mail->addAddress('vitr2o@gmail.com');     
				$mail->addAddress('vitr2o@outlook.com');   

				//Content
				$mail->isHTML(true);                                  
				$mail->Subject = 'Hola correo enviado desde tu página web';
				$mail->Body    = $mensajemail;
				$mail->CharSet = 'UTF-8';
				$mail->send();
				echo '<h5>El mensaje se envio correctamente</h5>';
			} catch (Exception $e) {
				echo "<h5>Hubo un error al enviar el mensaje: {$mail->ErrorInfo}</5>";
			}
			
			?>
				</div>
				<br>
				<p class="ps" style="font-size: xx-large;">
					"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
					"No hay nadie que ame el dolor mismo, que lo busque, lo encuentre y lo quiera, simplemente porque es el dolor."
				</p>
				<hr>
			</div>
			<footer>
				<h6>
					<div class="vcard">
						<div> <br><span class="name">Euterpe Death</span>-<span class="locality">Medellin</span>-<span class="region">Antioquia</span>-<span class="country-name">Colombia</span></div>
						<div> <span class="tel">3122084404</span>-<span class="email">vitr2o@gmail.com</span></div>
					</div>
				</h6>

				<script src="../js/contador.js"></script> 

			</footer>
		</div>

		<script src="../js/jquery.min.js"></script>
    	<script src="../js/popper.min.js"></script>
    	<script src="../js/bootstrap.min.js"></script>

		<script src="../js/iconos.js"></script>

	</body>
</html>
