<!DOCTYPE>
<html>
<head>
	<title>Procesar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/HDVestilo.css">
	<link rel="shortcut icon" type="imege/x-icon" href="image/iconohdv.png"/>
</head>
<body>
	<?php
	function validacion($var){
    			if (isset ($_POST[$var])) {
    				echo $_POST[$var];$_POST[$var];
    			}
    		}

    		function validatext($var, $error = "error de campo"){
    			if (isset($_POST[$var]) && ctype_alpha($_POST[$var])) {
    					$var = $_POST[$var];
    					echo $var;
    			}else{
    				$error;	
    				header("Location: http://localhost/HojaVida_luz/hojadevida.php? $var=".$error);
    			}
    			return $var;
    		}

    		function validanumb($var, $error = "error de campo"){
    			if (isset($_POST[$var]) && is_numeric($_POST[$var])) {
    				echo $_POST[$var];
    			}else {
    				header("Location: http://localhost/HojaVida_luz/hojadevida.php?");
    			}
    			return $var;
    		}

    		function validadate($var){
    			//explode split(pattern, string)
    			$valores = array();
    			$valores = split('[-./]', $_POST[$var]);
    			if (isset($_POST[$var]) && checkdate($valores[1], $valores[2], $valores[0])) {
    				echo $valores[1]."-". $valores[2]."-". $valores[0];
    			}else {
    				header("Location: http://localhost/HojaVida/formulario.php?");
    			}
    		}

	echo "<div class='E1'> Hoja De Vida Para Solicitud De Empleo"."</div>";

		echo "<div class='E2'> Ciudad: ".validatext('ci')."</div>";


		echo "<div class='E2'> Fecha: ".validadate('fecha')."</div>";

	$EmpleoCargo = $_POST['em'];
		echo "<div class='E2'> Empleo o cargo solicitado: ".$EmpleoCargo."</div>";

	
		echo "<div class='E2'> Codigo del cargo: ".validanumb('cod')."</div>";

	echo "<div class='E1'> 1. DATOS PERSONALES"."</div>";
	
	$formatos= array('.jpg', '.png');
		if (isset($_POST['Enviar'])) {
			$nombreArchivo= $_FILES['imagen']['name'];
			$nombreTmpArchivo= $_FILES['imagen']['tmp_name'];
			$ext= substr($nombreArchivo, strrpos($nombreArchivo, '.'));
			if (in_array($ext, $formatos)){
				if (move_uploaded_file($nombreTmpArchivo, "../Archivos/$nombreArchivo")) {
					echo "<script>
					alert('imagen subida exitosamente');
					</script>";					
				}
			}else{
				echo "<script>
    				alert('Extension de imagen no permitida');
				</script>";
			}
		}

	$PApellido = $_POST['pa'];
		echo "<div class='E2'> Primer Apellido: ".$PApellido."</div>";

	$SApellido = $_POST['sa'];
		echo "<div class='E2'> Segundo Apellido: ".$SApellido."</div>";

	$Nombres = $_POST['nom'];
		echo "<div class='E2'> Nombres: ".$Nombres."</div>";

	$Profesion = $_POST['pro'];
		echo "<div class='E2'> Profesion,ocupacion u oficio: ".$Profesion."</div>";

	$AExperiencia = $_POST['ae'];
		echo "<div class='E2'> Años de experiancia laboral: ".$AExperiencia."</div>";

	$ASalarial = $_POST['sa'];
		echo "<div class='E2'> Aspiracion salarial: $".$ASalarial."</div>";

	$LugarN = $_POST['la'];
		echo "<div class='E2'> Lugar de nacimiento: ".$LugarN."</div>";

	$FechaN = $_POST['FN'];
		echo "<div class='E2'> Fecha de nacimiento: ".$FechaN."</div>";
		
	if (isset($_POST['ECivil']) && ($_POST['ECivil']=='Casado' || $_POST['ECivil']=='Soltero' || $_POST['ECivil']=='Viudo' || $_POST['ECivil']=='Libre' || $_POST['ECivil']=='Otro')){
		$ECivil = $_POST['ECivil'];
		echo "<div class='E2'> Estado civil: ".$ECivil."</div>";
		}

	$DireccionD = $_POST['DireccionD'];
		echo "<div class='E2'> Direccion del domicilio: ".$DireccionD."</div>";

	$Barrio = $_POST['Barrio'];
		echo "<div class='E2'> Barrio: ".$Barrio."</div>";

	$Tele = $_POST['Tele'];
		echo "<div class='E2'> Telefono: ☏ ".$Tele."</div>";

	$CC = $_POST['CC'];
		echo "<div class='E2'> Cedula de ciudadania N: ".$CC."</div>";

	$ExpedidaE = $_POST['ExpedidaE'];
		echo "<div class='E2'> Expedida en: ".$ExpedidaE."</div>";

	$LibretaM = $_POST['LibretaM'];
		echo "<div class='E2'> Libreta militar: ".$LibretaM."</div>";

	$nDistrito= $_POST['Distrito'];
		echo "<div class='E2'> Distrito: ".$nDistrito."</div>";
		if (isset($_POST['DNumero']) && ($_POST['DNumero']=='Primera clase' || $_POST['DNumero']=='Segunda clase')){
			$Distrito= $_POST['DNumero'];
			echo "<div class='E2'>"."(".$Distrito.")"."</div>";
		}

	$LicenciaC = $_POST['LicenciaC'];
		echo "<div class='E2'>Licencia de conduccion: ".$LicenciaC."</div>";
	
	if (isset($_POST['VPropia']) && ($_POST['VPropia']=='Si' || $_POST['VPropia']=='No')){
		$VPropia = $_POST['VPropia'];
			echo "<div class='E2'> Vivienda Propia: ".$VPropia."</div>";
		}

	$NombreA = $_POST['NombreA'];
		echo "<div class='E2'> Nombre del arrendador: ".$NombreA."</div>";

	$Tele1 = $_POST['Tele1'];
		echo "<div class='E2'> Telefono: ☏ ".$Tele1."</div>";

	$ValorA = $_POST['ValorA'];
		echo "<div class='E2'> Valor del arriendo: ".$ValorA."</div>";

	if (isset($_POST['TrabajandoA']) && ($_POST['TrabajandoA']=='Si' || $_POST['TrabajandoA']=='No')){
		$TrabajandoA = $_POST['TrabajandoA'];	
		echo "<div class='E2'>  Esta trabajando actualmente: ".$TrabajandoA."</div>";
		}

	$EEmpresa = $_POST['EEmpresa'];
		echo "<div class='E2'> En que empresa: ".$EEmpresa."</div>";

	$TipoC = $_POST['TipoC'];
		echo "<div class='E2'> Tipo de contrato: ".$TipoC."</div>";

echo "<div class='E1'> 2. EDUCACION Y APTITUDES"."</div>";

	$Establecimiento = $_POST['Establecimiento'];
		echo "<div class='E2'> Establecimiento: ".$Establecimiento."</div>";

	$Ciudad1 = $_POST['Ciudad1'];
		echo "<div class='E2'> Cuidad: ".$Ciudad1."</div>";

	$Grado = $_POST['Grado'];
		if (isset($_POST['Grado']) && ($_POST['Grado']=='Ninguno' || $_POST['Grado']=='Kinder'|| $_POST['Grado']=='Primero'|| $_POST['Grado']=='Segundo'|| $_POST['Grado']=='Tercero'|| $_POST['Grado']=='Cuarto'|| $_POST['Grado']=='Quinto')){
			echo "<div class='E2'>  Ultimo grado cursado: ".$Grado."</div>";
		}

	$Fecha1 = $_POST['Fecha1'];
		echo "<div class='E2'> Fecha: ".$Fecha1."</div>";

	$Establecimiento2 = $_POST['Establecimiento2'];
		echo "<div class='E2'> Establecimiento: ".$Establecimiento2."</div>";

	$Ciudad2 = $_POST['Ciudad2'];
		echo "<div class='E2'> Cuidad: ".$Ciudad2."</div>";

	$Grado1 = $_POST['Grado1'];
		if (isset($_POST['Grado1']) && ($_POST['Grado1']=='Ninguno' || $_POST['Grado1']=='Sexto'|| $_POST['Grado1']=='Septimo'|| $_POST['Grado1']=='Octavo'|| $_POST['Grado1']=='Noveno'|| $_POST['Grado1']=='Decimo'|| $_POST['Grado1']=='Undecimo'|| $_POST['Grado1']=='Duodécimo')){
			echo "<div class='E2'> Ultimo grado cursado: ".$Grado1."</div>";
		}

	$Fecha2 = $_POST['Fecha2'];
		echo "<div class='E2'> Fecha: ".$Fecha2."</div>";

	$Establecimiento3 = $_POST['Establecimiento3'];
		echo "<div class='E2'>Establecimiento: ".$Establecimiento3."</div>";

	$Ciudad3 = $_POST['Ciudad3'];
		echo "<div class='E2'>Cuidad: ".$Ciudad3."</div>";

	$AñosC = $_POST['AñosC'];
		echo "<div class='E2'>Años cursados: ".$AñosC."</div>";

	$Fecha3 = $_POST['Fecha3'];
		echo "<div class='E2'>Fecha: ".$Fecha3."</div>";

	$TituloE = $_POST['TituloE'];
		echo "<div class='E2'>Titulo obtenido y/o especialidad: ".$TituloE."</div>";
	
	if (isset($_POST['TP']) && ($_POST['TP']=='Tecnica' || $_POST['TP']=='Tecnologica'|| $_POST['TP']=='Profesional')){
		$TP = $_POST['TP'];
		echo "<div class='E2'>Tipo de formacion:  ".$TP."</div>";
		}

	$EstudiosA = $_POST['EstudiosA'];
		echo "<div class='E2'>¿Que estudios realiza actualmente?: ".$EstudiosA."</div>";

	$Horario = $_POST['Horario'];
	$Horario1 = $_POST['Horario1'];
		echo "<div class='E2'>Horario: ".$Horario."  a  ".$Horario1."</div>";

echo "<div class='E1'> 3. EXPERIENCIA LABORAL."."</div>";

	$UltimaE = $_POST['UltimaE'];
		echo "<div class='E2'>Nombre de la ultima o actual empresa: ".$UltimaE."</div>";

	$Direccion = $_POST['Direccion'];
		echo "<div class='E2'>Direccion: ".$Direccion."</div>";

	$Tele2 = $_POST['Tele2'];
		echo "<div class='E2'>Telefono(s): ☏ ".$Tele2."</div>";

	$JefeI = $_POST['JefeI'];
		echo "<div class='E2'>Nombre de su jefe inmediato: ".$JefeI."</div>";

	$CargosDes = $_POST['CargosDes'];
		echo "<div class='E2'>Cargo(s)deseempeñado(s) por usted: ".$CargosDes."</div>";

	$FuncionesR = $_POST['FuncionesR'];
		echo "<div class='E2'>Funciones realizadas: ".$FuncionesR."</div>";

	$FechaI = $_POST['FechaI'];
		echo "<div class='E2'>Fecha de ingreso: ".$FechaI."</div>";

	$FechaR = $_POST['FechaR'];
		echo "<div class='E2'>Fecha de retiro: ".$FechaR."</div>";

	$SueldoI = $_POST['SueldoI'];
		echo "<div class='E2'>Sueldo inicial: $".$SueldoI."</div>";

	$SueldoF = $_POST['SueldoF'];
		echo "<div class='E2'>Sueldo final: $".$SueldoF."</div>";

	$MotivoR = $_POST['MotivoR'];
		echo "<div class='E2'>Motivo del retiro: ".$MotivoR."</div>";

	$ActualE = $_POST['ActualE'];
		echo "<div class='E2'>Nombre de la empresa: ".$ActualE."</div>";

	$Direccion1 = $_POST['Direccion1'];
		echo "<div class='E2'>Direccion: ".$Direccion1."</div>";

	$Tele3 = $_POST['Tele3'];
		echo "<div class='E2'>Telefono(s): ☏ ".$Tele3."</div>";

	$NombreJI = $_POST['NombreJI'];
		echo "<div class='E2'>Nombre de su jefe inmediato: ".$NombreJI."</div>";

	$DesempeñadosU = $_POST['DesempeñadosU'];
		echo "<div class='E2'>Cargo(s)deseempeñado(s) por usted: ".$DesempeñadosU."</div>";

	$Funciones = $_POST['Funciones'];
		echo "<div class='E2'>Funciones realizadas: ".$Funciones."</div>";

	$FechaI1 = $_POST['FechaI1'];
		echo "<div class='E2'>Fecha de ingreso: ".$FechaI1."</div>";

	$FechaR1 = $_POST['FechaR1'];
		echo "<div class='E2'>Fecha de retiro: ".$FechaR1."</div>";

	$InicialS = $_POST['InicialS'];
		echo "<div class='E2'>Sueldo inicial: $".$InicialS."</div>";

	$ActualS = $_POST['ActualS'];
		echo "<div class='E2'>Sueldo final: $".$ActualS."</div>";

	$RetimoM = $_POST['RetimoM'];
		echo "<div class='E2'>Motivo del retiro: ".$RetimoM."</div>";

echo"<div class='E1'> 4. TRAYECTORIA POR EMPRESAS"."</div>";
	
	$checks = array();
		for($i=1; $i<=33; $i++){
			if (isset($_POST[$i])){
				$checks[$i]=$_POST[$i].'<br>';
				echo "<div class='E2'>";
				print_r ($checks [$i]);
				echo "</div>";
			}			
		}

echo"<div class='E1'> 5. INFORMACION FAMILIAR."."</div>";

	$EsposaN = $_POST['EsposaN'];
		echo "<div class='E2'>Nombre esposa(o) o compañera(o): ".$EsposaN."</div>";

	$OcupacionP = $_POST['OcupacionP'];
		echo "<div class='E2'>Profesion, ocupacion u oficio: ".$OcupacionP."</div>";

	$TrabajaE = $_POST['TrabajaE'];
		echo "<div class='E2'>Empresa donde trabaja: ".$TrabajaE."</div>";

	$CargoA = $_POST['CargoA'];
		echo "<div class='E2'>Cargo actual: ".$CargoA."</div>";

	$Direccion2 = $_POST['Direccion2'];
		echo "<div class='E2'>Direccion: ".$Direccion2."</div>";

	$Tele4 = $_POST['Tele4'];
		echo "<div class='E2'>Telefono: ☏ ".$Tele4."</div>";

	$Ciudad4 = $_POST['Ciudad4'];
		echo "<div class='E2'>Ciudad: ".$Ciudad4."</div>";

	$PersonasS = $_POST['PersonasS'];
		echo "<div class='E2'>N de personas que dependen economicamente del solicitante: ".$PersonasS."</div>";

	$Parentesco = $_POST['Parentesco'];
		echo "<div class='E2'>Parentesco: ".$Parentesco."</div>";

	$Edades1 = $_POST['Edades1'];
		echo "<div class='E2'>Edades: ".$Edades1."</div>";

	$NombresP = $_POST['NombresP'];
		echo "<div class='E2'>Nombre(s) padre(s): ".$NombresP."</div>";

	$OcupacionO = $_POST['OcupacionO'];
		echo "<div class='E2'>Profesion, ocupacion u oficio: ".$OcupacionO."</div>";

	$NombresP2 = $_POST['NombresP2'];
		echo "<div class='E2'>Nombre(s) padre(s): ".$NombresP2."</div>";
	
	$OcupacionO2 = $_POST['OcupacionO2'];
		echo "<div class='E2'>Profesion, ocupacion u oficio: ".$OcupacionO2."</div>";

echo"<div class='E1'> 6. REFERENCIAS PERSONALES."."</div>";

	$Nombre1 = $_POST['Nombre1'];
		echo "<div class='E2'>Nombre: ".$Nombre1."</div>";

	$Ocupacion1 = $_POST['Ocupacion1'];
		echo "<div class='E2'>Ocupacion: ".$Ocupacion1."</div>";

	$Direccion3 = $_POST['Direccion3'];
		echo "<div class='E2'>Direccion: ".$Direccion3."</div>";

	$Tele5 = $_POST['Tele5'];
		echo "<div class='E2'>Telefono: ☏ ".$Tele5."</div>";

	$Nombre2 = $_POST['Nombre2'];
		echo "<div class='E2'>Nombre: ".$Nombre2."</div>";

	$Ocupacion2 = $_POST['Ocupacion2'];
		echo "<div class='E2'>Ocupacion: ".$Ocupacion2."</div>";

	$Direccion4 = $_POST['Direccion4'];
		echo "<div class='E2'>Direccion: ".$Direccion4."</div>";

	$Tele6 = $_POST['Tele6'];
		echo "<div class='E2'>Telefono: ☏ ".$Tele6."</div>";

echo"<div class='E1'> 7. INFORMACION ADICIONAL."."</div>";

	if (isset($_POST['SugirioE']) && ($_POST['SugirioE']=='Anuncio' || $_POST['SugirioE']=='Amigo'|| $_POST['SugirioE']=='Agencia'|| $_POST['SugirioE']=='Otro')){
	$SugirioE = $_POST['SugirioE'];
	echo "<div class='E2'>¿Quien le sugirio solicitar empleo en esta empresa?:  ".$SugirioE."</div>";
		}
	
	if (isset($_POST['recomiendaAE']) && ($_POST['recomiendaAE']=='Si' || $_POST['recomiendaAE']=='No')){
		$recomiendaAE = $_POST['recomiendaAE'];
		echo "<div class='E2'>¿Lo recomienda alguien de esta empresa?: ".$recomiendaAE."</div>";
		}

	$RecomiendaN = $_POST['RecomiendaN'];
		echo "<div class='E2'>Nombre de la persona que lo recomienda: ".$RecomiendaN."</div>";

	$DivisionD = $_POST['DivisionD'];
		echo "<div class='E2'>Division o departamento: ".$DivisionD."</div>";

	$PTrabajan = $_POST['PTrabajan'];
		echo "<div class='E2'>Si tiene parientes en esta empresa nombrelos: ".$PTrabajan."</div>";

echo"<div class='E1'> 8. ADMINISTRACION PROCESO DE SELECCION."."</div>";

	$entrevistadorP = $_POST['entrevistadorP'];
		echo "<div class='E2'>Concepto primer entrevistador: ".$entrevistadorP."</div>";

	$Fecha4 = $_POST['Fecha4'];
		echo "<div class='E2'>Fecha: ".$Fecha4."</div>";

	$entrevistadorS = $_POST['entrevistadorS'];
		echo "<div class='E2'>Concepto segundo entrevistador: ".$entrevistadorS."</div>";

	$fecha5 = $_POST['fecha5'];
		echo "<div class='E2'>Fecha: ".$fecha5."</div>";

	$Conclusiones1 = $_POST['Conclusiones1'];
		echo "<div class='E2'>Conclusiones: ".$Conclusiones1."</div>";

	$fecha6 = $_POST['fecha6'];
		echo "<div class='E2'>Fecha: ".$fecha6."</div>";
	
	if (isset($_POST['CDefinitivamente']) && ($_POST['CDefinitivamente']=='Si' || $_POST['CDefinitivamente']=='No')){
		$CDefinitivamente = $_POST['CDefinitivamente'];
		echo "<div class='E2'>Candidato seleccionado definitivamente: ".$CDefinitivamente."</div>";
		}
	
	if (isset($_POST['CProximamente']) && ($_POST['CProximamente']=='Si' || $_POST['CProximamente']=='No')){
		$CProximamente = $_POST['CProximamente'];
		echo "<div class='E2'>Candidato elegible proximamente: ".$CProximamente."</div>";
		}

	$ContrateseD = $_POST['ContrateseD'];
		echo "<div class='E2'>Contratese aparti del: ".$ContrateseD."</div>";

	$Sueldo1 = $_POST['Sueldo1'];
		echo "<div class='E2'>Sueldo: $".$Sueldo1."</div>";

	$Cargo1 = $_POST['Cargo1'];
		echo "<div class='E2'>Cargo: ".$Cargo1."</div>";

	$TContrato = $_POST['TContrato'];
		echo "<div class='E2'>Tipo de contrato: ".$TContrato."</div>";

	$ReferenciasV = $_POST['ReferenciasV'];
		echo "<div class='E2'>Referencia verificadas por: ".$ReferenciasV."</div>";

	$PEntrevistador = $_POST['PEntrevistador'];
		echo "<div class='E2'>Primer entrevistador: ".$PEntrevistador."</div>";

	$SEntrevistador = $_POST['SEntrevistador'];
		echo "<div class='E2'>Segundo entrevistador: ".$SEntrevistador."</div>";

	$FirmaA = $_POST['FirmaA'];
		echo "<div class='E2'>Firma de quien autoriza contratacion: ".$FirmaA."</div>";
?>
</body>
</html>