<!Doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
	<meta name="description" content="We creates and develope webpages, logos, user experiences and mobiles apps." />

	<meta property="og:title" content="Landcreativa - Materializing your ideas">
	<meta property="og:site_name" content="Landcreativa">
	<meta property="og:url" content="http://www.landcreativa.com/">
	<meta property="og:image" content="
		/***** http://www.teehanlax.com/resources/img/favicons/open-graph-default.png **/">

	<title>Landcreativa - Materializing your ideas</title>

	<link rel="stylesheet" type="text/css" href="normalize.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="shortcut icon" type="image/ico" href="images/favicon.ico">

	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="images/favicon-52.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon-114.png">

</head>
<body>

	<nav class="cab">
		<div class="content">
			<div class="logo">
				<a href="#home">
					<div class="iso"></div>
					<div class="text"><h1>Landcreativa</h1></div>
				</a>
			</div>
			<div class="menu_btn">
				<a href="#">
					<span class="icon-menu"></span>
				</a>
			</div>
		</div>
	</nav> 

	<section id="home">
		<div class="content">

			<div class="mini_logo">
			</div>

			<h1>
				Bienvenido a Lancreativa
			</h1>
			<h2>
				Somos una agencia de Diseño web, diseño gráfico y aplicaciones móviles que hace materializa tus ideas
				<div style="display:none;">
					Una agencia creativa de <strong>Dise&ntilde;o web</strong> y <strong>Dise&ntilde;o gr&aacute;fico</strong> que materializa tus ideas.
				</div>
			</h2>	
			<p>
				<a href="#" id="openCuentanos">
					Cuentanos tu proyecto 
				</a>
				<!-- <input type="text" requiered /> -->
			</p>		
		</div>
		<div class="next_page">
			<a href="#about">
				<p class="icon-down"></p>
			</a>
		</div>	
	</section>

	<section id="contactForm">
	<?php
	    if( (isset($_POST["name"])) and (isset($_POST["email"])) and (isset($_POST["project"])) ){
	        //Tomo variables
	        $name = htmlspecialchars($_POST["name"]);
	        $email = htmlspecialchars($_POST["email"]);
	        $project = htmlspecialchars($_POST["project"]);

	        //Variables para envio de mail
	        $para = "landcreativa@gmail.com";
	        $asunto = "Landcreativa";
	        $mensaje = "Name: ".$name."\r\n";
	        $mensaje .= "Email: ".$email."\r\n";
	        $mensaje .= "Project: ".$project."\r\n";
	        $cabeceras = 'From: Contacto Landcreativa <info@landcreativa.com>';

	        if (mail($para, $asunto, $mensaje, $cabeceras)){
	    ?> 
			<h1 style="color:#40d100;">
				Contact form sent
			</h1>
			<p>
				Thank you very much for sending us your message. We'll send you an email as soon as possible.
			</p>
			<p>
				Landcreativa
			</p> 
		<?php 
	    	} else{
	    ?>

			<h1 style="color:#fb0b0b;">
				We couldn't send your request
			</h1>
			<p>
				Ups!!! There was a problem with your email. Please send it again, and if the error persisten, please notify us by email: <u>info@landcreativa.com</u>
			</p>

			<form action="contacto.php" method="post" class="formulario">
				<fieldset>
					<p>01. Name <span>*</span></p>
					<input type="name" name="name" placeholder="Escribe tu nombre" required />
				</fieldset>
				<fieldset>
					<p>02. Email Adress <span>*</span></p>
					<input type="email" name="email" placeholder="Mail de contacto" required />
				</fieldset>
				<fieldset style="height:180px;">
					<p>03. Tell us about your project <span>*</span></p>
					<textarea type="textarea" placeholder="¿En qué te podemos ayudar?" name="project"></textarea>
				</fieldset>
				<fieldset>
					<div class="boton"> 
						<input type="submit" value="Get in touch" />
					</div>
				</fieldset>
			</form>

		<?php 
			}
	    }
	    else {
	    ?>
			<form action="contacto.php" method="post" class="formulario">
				<fieldset>
					<p>01. Name <span>*</span></p>
					<input type="name" name="name" placeholder="Escribe tu nombre" required />
				</fieldset>
				<fieldset>
					<p>02. Email Adress <span>*</span></p>
					<input type="email" name="email" placeholder="Mail de contacto" required />
				</fieldset>
				<fieldset style="height:180px;">
					<p>03. Tell us about your project <span>*</span></p>
					<textarea type="textarea" placeholder="¿En qué te podemos ayudar?" name="project"></textarea>
				</fieldset>
				<fieldset>
					<div class="boton"> 
						<input type="submit" value="Get in touch" />
					</div>
				</fieldset>
			</form>
    <?php
   	 	}
	?>
	</section>

	<div class="blackBackground"></div> 

	<div class="social_networks">
	<ul>
		<li>
			<a href="http://www.facebook.com/landcreativa" target="_blank">
				<span class="icon-facebook"></span>
			</a>
		</li>
		<li>
			<a href="http://www.twitter.com/landcreativa" target="_blank">
				<span class="icon-twitter"></span>
			</a>
		</li>
		<li>
			<a href="mailto:info@landcreativa.com" target="_blank">
				<span class="icon-mail"></span>
				<span class="text">info@landcreativa.com</span>
			</a>
		</li>
	</ul>
	</div>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/animations.js"></script>

	<script type="text/javascript">
		$(".blackBackground").show(0);
		$("#contactForm").show(0);
	</script>

</body>
</html>