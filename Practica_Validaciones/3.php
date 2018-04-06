<!DOCTYPE html>
<html >
<head>
	<title>PUNTO #3</title>
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
                  <li><a href="">EJERCICIOS</a>
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
                echo $data;

               $ncaracteres = strlen($data);
                 echo "<div class='TL1'>"."Numero De Caracteres Ingresados: ".$ncaracteres."</div>";

               $ninicia = substr($data, 0,1);
                 echo "<div class='TL1'>"."El Numero En El Que Inicia Es: ".$ninicia."</div>";

               $pnumeros = substr($data, 0,3);
                 echo "<div class='TL1'>"."Los Tres Primeros Numeros Son: ".$pnumeros."</div>";

               $ultimas = strlen($data);
   
               $letras = substr($data, -7);

               echo "<div class='TL1'>"."Los Ultimos Siete Numeros Son: ".$letras."</div>";

               if ($ncaracteres>=10) {
                echo "<div class='TL1'>"."Tiene Mas de 10 Numeros </div>";
               } else {
                echo  "<div class='TL1'>"."No tiene Mas de 10 Numeros </div>";
               
               }

               if (($pnumeros==310)||($pnumeros==311)||($pnumeros==312)||($pnumeros==313)||($pnumeros==314)||($pnumeros==315)||($pnumeros==316)||($pnumeros==317)||($pnumeros==318)||($pnumeros==319)||($pnumeros==320)||($pnumeros==321)||($pnumeros==323)) {
                 echo "<div class='TL1'>"."Es un numero telefonico </div>";
               } else {
                "<div class='TL1'>"."No es un numero telefonico </div>";
               }

          ?> 
         	  </div>
         </div>
      </div>
	</div>
	
</body>
</html>