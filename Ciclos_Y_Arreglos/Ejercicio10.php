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
			
			echo "<div class='E1'>Ejercicio 10"."</div>";

			$array = array();	
			$alp = array();
			$resultado = array();
			$r = 5;

			for ($j=1; $j < 6; $j++) {
				$array[$j] = $_GET['A'.$j];
				$alp[$j] = $_GET['B'.$r];

				$resultado[$j] = $array[$j] * $alp[$j];

				$r--;						

			echo "<div class='E2'>".$array[$j]." * ". $alp[$j] ." = ". $resultado[$j]."</div>";
			}
		?>
	</div>
</body>
</html>