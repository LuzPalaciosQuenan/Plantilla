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
			
			echo "<div class='E1'>Ejercicio 13"."</div>";

			$tabla = array();
			$i=0;
			for ($j=1; $j < 31; $j++) { 
				$tabla[$j] = rand(1, 50);
				//$tabla[$j] = $_GET['N'.$j];

				if ($tabla[$j] > 40) {
					echo "<div class='E2'>" . $tabla[$j] ." En la posicion " .$j . "</div>";
				}
			}
				for ($j=1; $j<31  ; $j++) { 
					 	
					 		if ($tabla[$j] > 40) {
					 			$i=$j; 
					 		}
				}

				if ($i==0) {
					echo "<div class='E2'>" . "No Hay Ningun Numero Mayor A 40" . "</div>";
				}	
		?>
	</div>
</body>
</html>