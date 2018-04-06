<!DOCTYPE html>
<html >
<head>
	<title>PUNTO 2</title>
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

                  include 'funciones.php';
                  $letrasM="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
                  $Letrasm="abcdefghijklmnñopqrstuvwxyz";

                  if (isset($_GET['d1'])) {
                     $c=0;
                     $c2=0;
                     $p2="";
                     $m="";
                     $p="";
                     $p = $_GET['d1'];
                     $palabra=explode(" ",$p);
                     for ($i=0; $i <count($palabra) ; $i++) { 

                        if (!empty($p)&&letras($palabra[$i])==2) {                        
                        $m=acomL($letrasM,$palabra[$i]); 
                        $c=comparacionM($letrasM,$palabra[$i]);
                        $c2=comparacionMi($Letrasm,$palabra[$i]);
                        $p=posicionL($letrasM,$palabra[$i]);
                              echo "<div class='TL1'>".$palabra[$i].":</strong> Es solo texto </div><div class='TL1'>tiene ".strlen($palabra[$i])." caracteres </div><div class='TL1'>Tiene ".$c." letras mayusculas </div><div class='TL1'> Tiene ".$c2." letras en minuscula.</div><div class='TL1'> Las letras mayusculas son ".$m." en las posiciones ".$p."</div>";

                     }elseif (!empty($p)&&is_string($palabra[$i])) {
                        $c2=0;
                        $c=0;
                        $c3=0;
                        $m2="";
                        $p2="";
                        $p2=posicionL($letrasM,$palabra[$i]);
                        $m2=acomL($letrasM,$palabra[$i]);
                        $c=comparacionMi($Letrasm,$palabra[$i]);
                        $c2=comparacionM($letrasM,$palabra[$i]);
                        $c3=contadorN($palabra[$i]);
                        echo "<div class='TL1'>".$palabra[$i].":</div><div class='TL1'> Contiene letras y, ".$c3." numeros </div><div class='TL1'> Tiene ".strlen($palabra[$i])." caracteres </div><div class='TL1'> Tiene".$c2." letras mayusculas </div> <div class='TL1'> Tiene".$c." letras en minuscula.</div><div class='TL1'> Las letras mayusculas son ".$m2." en las posiciones ".$p2."</div>";
                     }   
                   }
                  }
            ?>
			   </div>
			</div>
		</div>
	</div>	
</body>
</html>