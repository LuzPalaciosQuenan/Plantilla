<!DOCTYPE HTML>
<html>
	<head>
		<title>FORMULARIO</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="">

		<!-- Header -->
		<div id="header">
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">LUZ PALACIOS</a></h1>
					<span>Design By TEMPLATED</span>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.html">Homepage</a></li>
						<li class="active"><a href="left-sidebar.html">Applied Studies</a></li>
						<li class="active"><a href="right-sidebar.html">Hobbies</a></li>
						<li class="active"><a href="no-sidebar.html">Aspirations</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 

					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Comentarios.</h2>
							</header>
							<ul class="style">
								<li>
									<p class="posted">Enero 10, 2018  |  (10 )  Comentario</p>
									<img src="images/pic04.jpg" alt="" />
									<p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>
								</li>
								<li>
									<p class="posted">Febrero 01, 2018  |  (10 )  Comentario</p>
									<img src="images/pic05.jpg" alt="" />
									<p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>
								</li>
								<li>
									<p class="posted">Marzo 18, 2018  |  (10 )  Comentario</p>
									<img src="images/pic06.jpg" alt="" />
									<p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>
								</li>
							</ul>
						</section>
					</div>
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Formulario De Contacto.</h2>
								<span class="byline">Bienvenido aqui podra dejar un breve comentario.</span>
							</header>
								<form action="enviar.php" method="post">
								<p >NOMBRE Y APELLIDO: </p>
								<input type="text"  placeholder="DIGITE SU NOMBRE COMPLETO" name="NombreYApellido" maxlength="100" size="50px">
								
								<p>TELEFONO: </p>
								<input type="text" placeholder="DIGITE SU NUMERO DE TELEFONO" name="Telefono" maxlength="11" size="50px">
								
								<p>CORREO ELECTRONICO: </p>
								<input type="text" placeholder="DIGITE SU CORREO ELECTRONICO" name="CorreoElectronico" maxlength="50" size="50px">
								
								<p>ASUNTO: </p>
								<input type="text" placeholder="DIGITE EL ASUNTO" name="Asunto" maxlength="50" size="50px">
								
								<p>MENSAJE: </p>
								<textarea rows="3" cols="50PX" placeholder="DEJE SU COMENTARIO" name="Mensaje" maxlength="300"></textarea>
								
								<p>
								<input type="submit" value="Enviar" class="button" >
								<input type="reset" value="LIMPIAR CAMPOS" class="button" >
								</p>
								</form>
						</section>
					</div>				
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div id="footer">
			<div class="container">
				<h2>Estos son algunos de los trabajos realizados por Luz:</h2>
				<div class="row">
					<div class="4u">
						<h2>ciclos y arreglos.</h2>
						<a class="image full"><img src="images/ciclos.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="Ciclos_Y_Arreglos/index.html" class="button">VER TRABAJO</a></p>
					</div>
					<div class="4u">
						<h2>Validaciones con php.</h2>
						<a class="image full"><img src="images/validaciones.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="Practica_Validaciones/index.php" class="button">VER TRABAJO</a></p>
					</div>
					<div class="4u">
						<h2>Plantilla hoja de vida.</h2>
						<a class="image full"><img src="images/HDV.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="Hojadevida/index.html" class="button">VER PLANTILLA</a></p>
					</div>
				</div>
			</div>
		</div>

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>
	</body>
</html>