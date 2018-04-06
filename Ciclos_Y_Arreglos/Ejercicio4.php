<!DOCTYPE>
<html>
<head>
	<title>Ciclos Y Arreglos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="shortcut icon" type="imege/x-icon" href="image/playa.png"/>
</head>
<body background="image/green.jpg">
	<div class="fondito"> 
		<?php
			 	
			echo "<div class='E1'> Ejercicio 4"."</div>";
			
			$array = array();
			$alp = array();

			for ($j=1; $j <11 ; $j++) { 
			$array[$j] = $_GET['N'.$j];
			$alp[$j] = pow($array[$j], 2);

			} 

			for ($i=1; $i < 11 ; $i++) { }
			 	

			for ($i=1; $i <11 ; $i++) { 
				echo "<div class='E2'>".$array[$i]."² = ".$alp[$i]."</div>";
				
			}
		?>
	</div>
</body>
</html>