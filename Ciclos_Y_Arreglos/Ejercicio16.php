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

			echo "<div class='E2'>";

			echo "<div class='E1'>Ejercicio 16"."</div>";
			
			for ($i=0; $i <= 5; $i++) { 
				for ($j=0; $j <= 5; $j++) { 
					if ($i == $j) {
						$matriz[$i][$j] = 1;
					}
					else {
						$matriz[$i][$j] = 0;
					}
				}
			}
			for ($i=0; $i <= 5; $i++) { 
				for ($j=0; $j <= 5; $j++) { 
					echo  " " . $matriz[$i][$j] . " ";
				}
				echo "<div class='E2'>"."</div>";
			}
		echo "</div>";
		?>
	</div>
</body>
</html>