<!DOCTYPE HTML>
<html>
	<head manifest="/manifiesto/manifiesto.cache">
		<title>Euterpe Death</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Euterpe Death" />
		<meta name="keywords" content="Weblog, blog, Euterpe Death, Musica, Metal" />
		<link rel="stylesheet" href="../css/estilo.css" type="text/css" />
	</head>
	<body>
		<div id="cajaheader">

		</div>
		<div id="principal" itempscope itemtype="http://www.data-vocabulary.org/Person">
		<header class="header">
				
				<div id="logo"></div>
				
				<div>
					<h1 class="titulo">EUTERP<span class="ocultar">'</span></h1><h1><span class="es inline-block">E</span></h1>
				</div>
				
		</header>
		
			<div id="contenido">
			<hr>
				<center><nav>
					<ul>
						<li><a href="../index.html" class="link"><canvas id="iconoinicio" width="50" height="50"></canvas><br />INICIO</a></li>
						<li><a href="../musica.html" class="link"><canvas id="iconomusica" width="50" height="50"></canvas><br />MÚSICA</a></li>
						<li><a href="../sobremi.html" class="link"><canvas id="iconosobreMi" width="50" height="50"></canvas><br />EUTERPE</a></li>
						<li><a href="../contacto.html" class="link"><canvas id="iconocontacto" width="50" height="50"></canvas><br />CONTACTO</a></li>
					</ul>
				</nav></center>
			<hr><hr class="hr2">

		<div id="php">
		<?php

//Recibo las variables de formulario

$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];

//Te muestro las variables

echo "<br />";
echo "<h3> '   'El mensaje que has enviado es:</h3>";
echo "<br />";
echo "<h4>'  'Nombre: ";
echo $nombre;
echo "<br />";
echo " '  'Email: ";
echo $mail;
echo "<br />";
echo " '  'Mensaje: ";
echo $mensaje;
echo "</h4>";

//Envio un email

$aquien = "vitr2o@gmail.com";
$asunto = "Has recibido un correo del Blog";
$mensajemail = $nombre." con el email ".$mail." te ha enviado un mensaje que dice ".$mensaje;

if(mail($aquien,$asunto,$mensajemail)){

echo "<h5>' 'Tu email se ha enviado correctamente</h5>";

}else{
echo "<h5>'El envio del email ha fallado'</h5>";
}
 

?>
				</div>
				<hr>
			</div>
			<footer>
				<h6>
					<div class="vcard">
						<div> <span class="name">Euterpe Death</span>-<span class="locality">Medellín</span>-<span class="region">Antioquia</span>-<span class="country-name">Colombia</span></div>
						<div> <span class="tel">3122084404</span>-<span class="email">vitr2o@gmail.com</span></div>
					</div>
				</h6>

				<script src="../js/contador.js"></script> 

			</footer>
		</div>

		<script src="../js/iconos.js"></script>

	</body>
</html>
