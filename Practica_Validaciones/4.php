<!DOCTYPE html>
<html >
<head>
	<title>PUNTO #4</title>
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
            $fecha=$_GET['d1'];

            if ((substr_count($fecha, "/"))==0) {            
            
            list($dia,$mes,$año) = explode('-', $fecha);
            if ($dia>31) {
               echo "<div class='TL1'>El dia ingresado es invalido </diV>";
            }
            if ($mes>12) {
               echo "<div class='TL1'>El mes ingresado es invalido </diV>";
                        }          
            if (($dia<=31) && ($mes<=12)) {
            echo "<div class='TL1'>El año ingresado fue $año </diV>";               
            echo "<div class='TL1'>El mes ingresado fue $mes </diV>";
            echo "<div class='TL1'>El dia ingresado fue $dia </diV>";
            $dateT= date_create();
            date_date_set( $dateT, $año, $mes, $dia);
            echo "La fecha es ". date_format($dateT,"Y/m/d");;
                     }
         } else{
               echo "<div class='TL1'>Fecha invalida</diV>";
                if ((substr_count($fecha, "/")>1)){
               echo "<div class='TL1'>Por favor separar fecha con '-' No con '/'</diV>";

            }
            
               echo "<div class='TL1'><a href='4.html'> Regresar</a>  ";
            }
           
            
            
            ?> 
            </div>
         </div>
      </div>
   </div>
	
</body>
</html>