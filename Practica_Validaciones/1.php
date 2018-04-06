b<!DOCTYPE html>
<html >
<head>
	<title>PUNTO #1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylos.css">
   <link rel="shortcut icon" type="imege/x-icon" href="image/playa.png"/>
</head>

<body background="image/green.jpg">

      <header>
         <div id="header">
            <nav> 
               <ul class="nav">
                  <li><a href="index.php">INICIO</a></li>
                  <li><a>EJERCICIOS</a>
                     <ul>
                        <li><a href="1.html">Punto 1</a></li>
                        <li><a href="2.html">Punto 2</a></li>
                        <li><a href="3.html">Punto 3</a></li>
                        <li><a href="4.html">Punto 4</a></li>
                        <li><a href="5.html">Punto 5</a></li>
                     </ul>
                  </li>
                  <li><a href="CONCLUSIONES.html">CONCLUSIONES</a></li>
               </ul>
            </nav>
         </div>
      </header>

	<div class="cont">
      <div class="fondito">
         <div class="textito">
         	<div class="TL">
         	<?php

            $data =$_GET['d1'];
              echo "<div class='TL1'>"."El Dato Ingresado Es: ".$data."</div>";

            $ncaracteres = strlen($data);

            $espacios = explode(" ", $data);

            $cont = 0;

              for ($j=0; $j < sizeof($espacios); $j++){
                $cont++;
                $data=$data . $espacios[$j];
              }
              if ($cont>1){
                echo "<div class='TL1'>"."Tiene ". ($cont-1) ." Espacios."."</div>";
              }

              if (preg_match("/^\d+$/", $data)||preg_match("/ \d+$/", $data)){
                echo "<div class='TL1'>"."Los Caracteres Ingresados Son Numericos."."</div>";
              }
              if (preg_match("/^\D+$/", $data)){
                echo "<div class='TL1'>"."Los Caracteres Ingresados Son Una Cadena De Texto."."</div>";
              }
              else if (preg_match("/[a-z][0-9]/", $data)||preg_match("/[0-9][a-z]/", $data)){
                echo "<div class='TL1'>"."Los Caracteres Ingresados Son Numeros Y Letras."."</div>";
              }

              echo "<div class='TL1'>"."Numero De Caracteres Ingresados Son: ".$ncaracteres."</div>";
          ?>
         	</div>
	      </div>
      </div>
   </div>	
   
</body>
</html>