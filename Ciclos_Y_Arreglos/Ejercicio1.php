<!DOCTYPE html>
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

			echo "<div class='E1'>Ejercicio 1"."</div>";

			$array = array();
			$acumuladora = 0;
			$resultado = 0;

			for ($j=1; $j < 11; $j++) { 
				$array[$j] = $_GET ['N'.$j];
				$acumuladora = $acumuladora + $array[$j];
				echo "<div class='E2'>" . $array[$j]."</div>";
			}

			$resultado = $acumuladora / 10;
			echo "<div class='E2'> Resultado ".$resultado."</div>";
				
			function Valida_campo ($RCD) {

			if(ctype_numeric($RCD) && isset($_GET[$RCD]))
				return  $_GET[$RCD];
			else  {
				return  0;			
				}

			}

		?>
	</div>
</body>
</html>
