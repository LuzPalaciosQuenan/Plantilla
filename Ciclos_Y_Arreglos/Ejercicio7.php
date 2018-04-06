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
			
			echo "<div class='E1'>Ejercicio 7"."</div>";

			$array = array();
			$alp = array();
			$contador = 0;

			for ($j=1; $j < 4; $j++) { 
				$array[$j] = $_GET['M'.$j];
				$alp[$j] = $_GET['N'.$j];

				echo  "<div class='E2'>" . $_GET['M'.$j]."  |  ".$_GET['N'.$j]."</div>";

				if ($array[$j] == $alp[$j]) {
					$contador ++;
				}
			}
			

			if ($contador == 3){
				echo "<div class='E2'>" . "Son Iguales"."</div>";
			}
			else { 
				echo "<div class='E2'>" . "Son Diferentes"."</div>";
			}

		 ?>
	</div>
</body>
</html>