   <!DOCTYPE html>
<html >
<head>
	<title>PUNTO #5</title>
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
            $correo=$_GET['d1'];
            $repeticiones=substr_count($correo,"@");
            echo "<div class='TL1'>Se han ingresado $repeticiones @</div>";
            if ($repeticiones==1) {

             list($nombre,$dominio) = explode('@', $correo);
            list($servicio,$extension) = explode('.', $dominio);            
            echo "<div class='TL1'>El dominio del correo es $servicio </div>";
            echo "<div class='TL1'>El nombre antes del correo es $nombre </div>";
            echo "<div class='TL1'>La extension del dominio es .$extension </div>";
           } else{
                      echo "<div class='TL1'>usted ha ingresado un correo invalido</div>";
                      echo "<div class='TL1'><a href=5.html>Regresar</a></div>";
           }
            


            
               
            ?> 
            </div>
         </div>
      </div>
   </div>
	
</body>
</html>