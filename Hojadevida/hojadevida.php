<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
	<title>Hoja De Vida</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
	<link rel="shortcut icon" type="imege/x-icon" href="image/icono.png"/>
	 <script>
    	function Numeros(e){
    		key=e.keyCode || e.which;
    		teclado=String.fromCharCode(key);
    		numero="0123456789";
    		especiales="8-37-38-46";
    		teclado_especial=false;

    		for (var i in especiales) {
    			if (key==especiales[i]) {
    				teclado_especial=true;
    			}
    		}
    		if (numero.indexOf(teclado)==-1 && !teclado_especial) {
    			return false;
    		}
    	}

    	function Letras(e){
    		key=e.keyCode || e.which;
    		teclado=String.fromCharCode(key).toLowerCase();
    		letras="abcdefghijklmnñopqrstuvwxyz";
    		especiales="8-37-38-49-164";
    		teclado_especial=false;

    		for(var i in especiales){
    			if(key==especiales[i]){
    				teclado_especial=true;break;
    			}
    		}
    		if (letras.indexOf(teclado)==-1 && !teclado_especial) {
    			return false;
    		}
    	}
    </script>
</head>

<body>
	<form action="procesar.php" method="POST" enctype="multipart/form-data" class="contact_form" name="contact_form">

			<div class="prueba">
				<img class="HDV" src="image/hojadevida.png">
				<label>HOJA DE VIDA <br> Para solicitud de empleo.</label>
			</div>

			<div class="datos3">
				<div class="datos4">
					<label for="1">Ciudad<br><input  id="ci" type="text" name="ci" onsubmit="return validatext()" required onkeypress="return Letras(event)" onpaste="return false">
				<span class="form_hint">Este campo es requerido</span>></label>
				</div>
				<div class="datos15">
					<label for="2">Fecha <br><input type="date" name="fecha" onsubmit="return validadate()" ></label>
				</div>
				<div class="datos4">
					<label for="3">Empleo o cargo solicitado<br><input type="text" name="em" id="em"  onkeypress="return Letras(event)" onpaste="return false"></label>
				</div>
				<div class="datos15">
					<label for="4">Codigo cargo<br><input type="number" name="cod" id="cod" required onsubmit="return validanumb()" onkeypress="return Numeros(event)" onpaste="return false">
				<span class="form_hint">Este campo es requerido</span></label>
				</div>
			</div>
		
			<div class="conten1">
				<label>1. DATOS PERSONALES</label>
			</div>

			
			<div id="imagePreview"></div>

				<input type="file" name="imagen" id="imagen">


			<div class="datos2">
				<div class="datos6">
					<label for="5">Primer Apellido<br><input type="text" name="pa" id="pa" onkeypress="return Letras(event)" onpaste="return false"></label>
				</div>
				<div class="datos6">
					<label for="6">Segundo Apellido<br><input type="text" name="sa" id="sa" onkeypress="return Letras(event)" onpaste="return false"></label>
				</div>
				<div class="datos6">
					<label for="7">Nombres<br><input type="text" name="nom" id="nom" required onkeypress="return Letras(event)" onpaste="return false">
					<span class="form_hint">Este campo es requerido</span></label>
				</div>
			</div>

			<div class="datos2">
				<div class="datos8">
					<label for="8">Profesion, ocupacion u oficio<br><input type="text" name="pro" id="pro"></label>
				</div>
				<div class="datos10">
					<label for="9">Años de experiencia laboral<br><input type="text" name="ae" id="ae"></label>
				</div>
				<div class="datos10">
					<label for="10">¿Cuanto es su aspiracion salarial?<br><input type="number" placeholder="$" name="sa" id="sa"></label>
				</div>
			</div>

			<div class="datos2">
				<div class="datos8">
					<label for="11">Lugar de nacimiento<br><input type="text" name="la" id="la"></label>
				</div>
				<div class="datos10">
					<label for="12">(*) Fecha de nacimiento<br><input type="date" name="FN" id="FN" required onsubmit="return validadate()"></label>
				</div>
				<div class="datos10">
					<label for="13">(*) Estado civil<br><id="13"></label>
					<select name="ECivil">
					<option value=" ">--Seleccionar--</option>
					<option value="Casado">Casado</option>
					<option value="Soltero">Soltero</option>
					<option value="Viudo">Viudo</option>
					<option value="Libre">Union libre</option>
					<option value="Otro">Otro</option>
					</select>
				</div>
			</div>

			<div class="datos2">
				<div class="datos8">
					<label for="14">Direccion domicilio<br><input type="text" name="DireccionD" id="14"></label> 
				</div>
				<div class="datos10">
					<label for="15">Barrio<br><input type="text" name="Barrio" id="15"></label>
				</div>
				<div class="datos10">
					<label for="16">Telefono<br><input type="number" placeholder="☏" name="Tele" id="16"></label>
				</div>
			</div>

			<div class="datos2">
				<div class="datos9">
					<label for="17">Cedula de ciudadania: N°<br><input type="number" name="CC" id="17"></label>
					<br>
					<label for="18">Expedida en:<input type="text" name="ExpedidaE" id="18"></label>
				</div>
				<div class="datos9">
					<label for="19">(**)Libreta militar N°<br><input type="number" name="LibretaM" id="19"></label>
					<br>
					<label for="20">Distrito N°<input type="number" name="Distrito" id="20"></label>
					Primera clase<input type="radio" name="DNumero" value="Primera clase"> 
					Segunda clase<input type="radio" name="DNumero" value="Segunda clase">
				</div>
			</div>

			<div class="datos3">
				<div class="datos11">
					<label for="01">Licencia de conduccion<br><input type="number" name="LicenciaC" id="01"></label>
				</div>
				<div class="datos15">
					<label for="">¿Vivienda propia?</label><br>
					Si <input type="radio" name="VPropia" value="Si"> 
					No <input type="radio" name="VPropia" value="No"> 
				</div>
				<div class="datos11">
					<label for="03">Nombre del arrendador<br><input type="text" name="NombreA" id="03"></label>
				</div>
				<div class="datos15">
					<label for="04">Telefono<br><input type="number" placeholder="☏" name="Tele1" id="04"></label>
				</div>
				<div class="datos15">
					<label for="05">Valor del arriendo<br><input type="number" placeholder="$" name="ValorA" id="05"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos10">
					<label for="">¿Estas trabajando actualmente?<br></label>
					Si <input type="radio" name="TrabajandoA" value="Si"> 
					No <input type="radio" name="TrabajandoA" value="No">
				</div>
				<div class="datos8"> 
					<label for="07">¿En que empresa?<br><input type="text" name="EEmpresa" id="07"></label>
					Empleado<input type="radio" name="EEmpresa" value="Empleado">
					Independiente<input type="radio" name="EEmpresa" value="Independiente">
				</div>
				<div class="datos10">
					<label for="08">Tipo de contrato<br><input type="text" name="TipoC" id="08"></label>
				</div>
			</div>
		
			<div class="conten1">
				<label>2. EDUCACION Y APTITUDES.</label>
			</div>

			<div class="datos3">
				<div class="datos15">
					<label for="">Primaria</label>
				</div>
				<div class="datos14">
					<label for="010">Establecimiento<br><input type="text" name="Establecimiento" id="010"></label>
				</div>
				<div class="datos15">
					<label for="011">Ciudad<br><input type="text" name="Ciudad1" id="011"></label>
				</div>
				<div class="datos15">
					<label for="">Ultimo grado cursado<br></label>
					<select name="Grado">
						<option>Ninguno</option>
						<option>Kinder</option>
						<option>Primero</option>
						<option>Segundo</option>
						<option>Tercero</option>
						<option>Cuarto</option>
						<option>Quinto</option>
					</select>
				</div>
				<div class="datos15">
					<label for="013">Fecha<br><input type="date" name="Fecha1" id="013"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos15">
					<label for="">Bachillerato</label>
				</div>
				<div class="datos14">
					<label for="014">Establecimiento<br><input type="text" name="Establecimiento2" id="014"></label>
				</div>
				<div class="datos15">
					<label for="015">Ciudad<br><input type="text" name="Ciudad2" id="015"></label>
				</div>
				<div class="datos15">
					<label for="">Ultimo grado cursado<br></label>					
						<select name="Grado1">
						<option>Ninguno</option>
						<option>Sexto</option>
						<option>Septimo</option>
						<option>Octavo</option>
						<option>Noveno</option>
						<option>Decimo</option>
						<option>Undecimo</option>
						<option>Duodécimo</option>
					</select>
				</div>
				<div class="datos15">
					<label for="016">Fecha<br><input type="date" name="Fecha2" id="016"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos13">
					<label for="">Educacion</label>
				</div>
				<div class="datos14">
					<label for="018">Establecimiento<br><input type="text" name="Establecimiento3" id="018"></label>
				</div>
				<div class="datos15">
					<label for="019">Ciudad<br><input type="text" name="Ciudad3" id="019"></label>
				</div>
				<div class="datos15">
					<label for="020">Años cursados<br><input type="text" name="AñosC" id="020"></label>
				</div>
				<div class="datos15">
					<label for="001">Fecha<br><input type="date" name="Fecha3" id="001"></label>
				</div>
				<br>
				<div class="datos16">
					<label for="002">Titulo y/o especialidad<br><input type="text" name="TituloE" id="002"></label>
				</div>
				<div class="datos16">
					<label for="">Tipo de formacion<br></label>
					Tecnica    <input type="radio" name="TP" value="Tecnica">
					Tecnologica<input type="radio" name="TP" value="Tecnologica">
					Profesional<input type="radio" name="TP" value="Profesional">
				</div>
			</div>

			<div class="datos3">
				<div class="datos20">
					<label for="004">¿Que estudios realiza actualmente?<br><input type="text" name="EstudiosA" id="004"></label>
				</div>
				<div class="datos10">
					<label for="005">Horario:<br><input type="time" name="Horario" id="005"> A <input type="time" name="Horario1" id="005"></label>
				</div>
			</div>

			<div class="conten1">
				<label>3. EXPERIENCIA LABORAL.</label>
			</div>

			<div class="datos3">
				<div class="datos8">
					<label for="006">Nombre de la ultima o actual empresa<br><input type="text" name="UltimaE" id="006"></label>
				</div>
				<div class="datos10">
					<label for="007">Direccion<br><input type="text" name="Direccion" id="007"></label>
				</div>
				<div class="datos10">
					<label for="008">Telefono(s)<br><input type="number" placeholder="☏" name="Tele2" id="008"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos8">
					<label for="009">Nombre de su jefe inmediato<br><input type="text" name="JefeI" id="009"></label>
				</div>
				<div class="datos8">
					<label for="0010">Cargo(s) desempeñado(s) por usted<br><input type="text" name="CargosDes" id="0010"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos22">	
					<label for="0011">Funciones realizadas<br><textarea name="FuncionesR" rows="2.5" cols="165" name="FuncionesR" id="0011"></textarea></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos10">
					<label for="0012">Fecha de ingreso<br><input type="date" name="FechaI" id="0012"></label>
				</div>
				<div class="datos10">
					<label for="0013">Fecha de retiro<br><input type="date" name="FechaR" id="0013"></label>
				</div>
				<div class="datos10">
					<label for="0014">Sueldo inicial<br><input type="number" placeholder="$" name="SueldoI" id="0014"></label>
				</div>
				<div class="datos10">
					<label for="0015">Sueldo final o actual<br><input type="number" placeholder="$" name="SueldoF" id="0015"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos22">
					<label for="0016">Motivo del retiro<br><textarea name="MotivoR" rows="2.5" cols="165" value="MotivoR" id="0016"></textarea></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos7">
					<label for="0017">Nombre de la ultima o actual empresa<br><input type="text" name="ActualE" id="0017"></label>
				</div>
				<div class="datos7">
					<label for="0018">Direccion<br><input type="text" name="Direccion1" id="0018"></label>
				</div>
				<div class="datos7">
					<label for="0019">Telefono(s)<br><input type="number" placeholder="☏" name="Tele3" id="0019"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos8">
					<label for="0020">Nombre de su jefe inmediato<br><input type="text" name="NombreJI" id="0020"></label>
				</div>
				<div class="datos8">
					<label for="0001">Cargo(s) desempeñado(s) por usted<br><input type="text" name="DesempeñadosU" id="0001"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos22">
					<label for="0002">Funciones realizadas<br><textarea name="Funciones" rows="2.5" cols="165" id="0002"></textarea></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos10">
					<label for="0003">Fecha de ingreso<br><input type="date" name="FechaI1" id="0003"></label>
				</div>
				<div class="datos10">
					<label for="0004">Fecha de retiro<br><input type="date" name="FechaR1" id="0004"></label>
				</div>
				<div class="datos10">
					<label for="0005">Sueldo inicial<br><input type="number" placeholder="$" name="InicialS" id="0005"></label>
				</div>
				<div class="datos10">
					<label for="0006">Sueldo final o actual<br><input type="number" placeholder="$" name="ActualS" id="0006"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos22">
					<label for="0007">Motivo del retiro<br><textarea name="RetimoM" rows="2.5" cols="165" id="0007"></textarea></label>
				</div>
			</div>

			<div class="conten1">
				<label>4. TRAYECTORIA POR EMPRESAS.</label>
			</div>

				<div class="lista">
						<div>
							<div>
								AGRICULTURA <input type="checkbox" name="1" value="AGRICULTURA">
							</div>
							<div>
								GANADERIA / AVICULTURA <input type="checkbox" name="2" value="GANADERIA/AVICULTURA">
							</div>
							<div>
								MINERIA <input type="checkbox" name="3" value="MINERIA">
							</div>
							<div >
								PETROLEO / GASOLINA <input type="checkbox" name="4" value="PETROLEO / GASOLINA">	
							</div>			
							<div>
								INDUSTRIA <input type="checkbox" name="5" value="INDUSTRIA">	
							</div>			
							<div>
								Alimentos y Bebidas <input type="checkbox" name="6" value="Alimentos y Bebidas">
							</div>
							<div>
								Tabaco <input type="checkbox" name="7" value="Tabaco">
							</div>
						</div>
						<div>	
							<div>
								Textiles y Confecciones <input type="checkbox" name="8" value="Textiles y Confecciones">
							</div>
							<div>
								Cuero y Calzado <input type="checkbox" name="9" value="Cuero y Calzado">
							</div>
							<div>
								Papel y Carton <input type="checkbox" name="10" value="Papel y Carton">
							</div>
							<div>
								Editorial y Artes Graficas <input type="checkbox" name="11" value="Editorial y Artes Graficas">	
							</div>	
							<div>
								Quimico y Farmaceutico <input type="checkbox" name="12" value="Quimico y Farmaceutico">
							</div>
							<div>
								Caucho y Plastico <input type="checkbox" name="13" value="Caucho y Plastico">
							</div>
							<div>
								Vidrio, Ceramica y Cemento <input type="checkbox" name="14" value="Vidrio, Ceramica y Cemento">
							</div>
						</div>
						<div>
							<div>
								Metalurgia <input type="checkbox"  name="15" value="Metalurgia">
							</div>
							<div>
								Maquinaria <input type="checkbox"  name="16" value="Maquinaria">
							</div>
							<div>
								Automotores <input type="checkbox"  name="17" value="Automotores">
							</div>
							<div>
								Muebles <input type="checkbox"  name="18" value="Muebles">
							</div>
							<div>
								Reciclaje  <input type="checkbox"  name="19" value="Reciclaje">
							</div>
							<div class="datos1">
								ELECTRICIDAD/GAS/AGUA <input type="checkbox"  name="20" value="ELECTRICIDAD/GAS/AGUA">
							</div>
							<div class="datos1">
								CONSTRUCCION <input type="checkbox"  name="21" value="CONSTRUCCION">
							</div>
						</div>
						<div>
							<div class="datos1">
								COMERCIO <input type="checkbox" name="22" value="COMERCIO">
							</div>
							<div class="datos1">
								HOTELES Y RESTAURANTES <input type="checkbox" name="23" value="HOTELES y RESTAURANTES">
							</div>
							<div class="datos1">
								TRANSPORTE <input type="checkbox" name="24" value="TRANSPORTE">
							</div>
							<div class="datos1">
								BODEGAJE <input type="checkbox" name="25" value="BODEGAJE">
							</div>
							<div class="datos1">
								COMUNICACIONES <input type="checkbox" name="26" value="COMUNICACIONES">
							</div>
							<div class="datos1">
								FINCA RAIZ <input type="checkbox" name="27" value="FINCA RAIZ">
							</div>
							<div class="datos1">
								INFORMATICO <input type="checkbox" name="28" value="INFORMATICO">
							</div>
						</div>
						<div>
							<div class="datos1">
								SALUD <input type="checkbox" name="29" value="SALUD">
							</div>
							<div class="datos1">
								EDUCACION <input type="checkbox" name="30" value="EDUCACION">
							</div>
							<div class="datos1">
								SEGUROS <input type="checkbox" name="31" value="SEGUROS">
							</div>
							<div class="datos1">
								VIGILACIA <input type="checkbox" name="32" value="VIGILACIA">
							</div>
							<div class="datos1">
								OTRO <input type="checkbox" name="33" value="OTRO">
							</div>	
							<div class="datos1">
							</div>
							<div class="datos1">								
							</div>						
						</div>
				</div>

			<div class="conten1">
				<label>5. INFORMACION FAMILIAR.</label>
			</div>

			<div class="datos3">
				<div class="datos7">
					<label for="0008">Nombre esposa(o) o compañera(o)<br><input type="text" name="EsposaN" id="0008"></label>
				</div>
				<div class="datos7">
					<label for="0009">Profesion, ocupacion u oficio<br><input type="text" name="OcupacionP" id="0009"></label>
				</div>
				<div class="datos7">
					<label for="00010">Empresa donde trabaja<br><input type="text" name="TrabajaE" id="00010"></label>
				</div>
			</div>
			
			<div class="datos3">
				<div class="datos10">
					<label for="00011">Cargo actual<br><input type="text" name="CargoA" id="00011"></label>
				</div>
				<div class="datos10">
					<label for="00012">Direccion<br><input type="text" name="Direccion2" id="00012"></label>
				</div>
				<div class="datos10">
					<label for="00013">Telefono(s)<br><input type="number" placeholder="☏" name="Tele4" id="00013"></label>
				</div>
				<div class="datos10">
					<label for="00014">Ciudad<br><input type="text" name="Ciudad4" id="00014"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos7">
					<label for="00015">N° de personas que dependen economicamente del solicitante<br><input type="number" name="PersonasS" id="00015"></label>
				</div>
				<div class="datos7">
					<label for="00016">Parentesco<br><input type="text" name="Parentesco" id="00016"></label>
				</div>
				<div class="datos7">
					<label for="00017">Edades<br><input type="number"  name="Edades1" id="00017"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos8">				
					<label for="00018">Nombre(s) padre(s)<br><input type="text" name="NombresP" placeholder="1." id="00018"></label>
				</div>
				<div class="datos8">
					<label for="00019">Profesion, ocupacion u oficio<br><input type="text" name="OcupacionO" placeholder="1." id="00019"></label>
				</div>
			</div>
			<div class="datos3">
				<div class="datos8">
					<label for=""><input type="text" name="NombresP2" placeholder="2." id="00018"></label>
				</div>
				<div class="datos8">
					<label for=""><input type="text" name="OcupacionO2" placeholder="2." id="00019"></label>
				</div>
				</div>
			</div>

			<div class="conten1">
				<label>6. REFERENCIAS PERSONALES.</label>
			</div>

			<div class="datos3">
				<div class="datos18">
					<label for="">1.-</label>
				</div>
				<div class="datos19">
					<label for="00001">Nombre<br><input type="text" name="Nombre1" id="00001"></label>
				</div>
				<div class="datos19">
					<label for="00002">Ocupacion<br><input type="text" name="Ocupacion1" id="00002"></label>
				</div>
				<div class="datos19">
					<label for="00003">Direccion<br><input type="text" name="Direccion3" id="00003"></label>
				</div>
				<div class="datos19">
					<label for="00004">Telefono(s)<br><input type="number" placeholder="☏" name="Tele5" id="00004"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos18">			
					<label for="">2.-</label>
				</div>
				<div class="datos19">
					<label for="00006">Nombre<br><input type="text" name="Nombre2" id="00006"></label>
				</div>
				<div class="datos19">
					<label for="00007">Ocupacion<br><input type="text" name="Ocupacion2" id="00007"></label>
				</div>
				<div class="datos19">
					<label for="00008">Direccion<br><input type="text" name="Direccion4" id="00008"></label>
				</div>
				<div class="datos19">
					<label for="00009">Telefono(s)<br><input type="number" placeholder="☏" name="Tele6" id="00009"></label>
				</div>
			</div>

			<div class="conten1">
				<label>7. INFORMACION ADICIONAL.</label>
			</div>

			<div class="datos3">
				<div class="datos8">	
					<label for="">¿Quien le sugirio solicitar empleo en esta empresa?<br></label>
						Anuncio<input type="radio" name="SugirioE" value="Anuncio"> 
						Amigo<input type="radio" name="SugirioE" value="Amigo"> 
						Agencia<input type="radio" name="SugirioE" value="Agencia">
						Otro<input type="radio" name="SugirioE" value="Otro">
				</div>
				<div class="datos8">
					<label for="000011">¿Lo recomienda alguien que trabaja en esta empresa?<br></label>
					Si <input type="radio" name="recomiendaAE" value="Si"> 
					No <input type="radio" name="recomiendaAE" value="No">
				</div>
			</div>

			<div class="datos3">
				<div class="datos8">
					<label for="000012">Nombre de la persona que lo recomienda<br><input type="text" name="RecomiendaN" id="000012"></label>
				</div>
				<div class="datos8">
					<label for="000013">Division o departamento<br><input type="text" name="DivisionD" id="000013"></label> 
				</div>
			</div>

			<div class="datos3">
				<div class="datos22">	
					<label for="000014">Si tiene parientes en esta empresa mencionelos<br><textarea name="PTrabajan" rows="2" cols="150" name="" id="000014"></textarea></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos7">	
					<label for="">Nota importante Favor no llamar por telefono, ni concurrir a preguntar por el resultado de esta solicitud. Nosotros le avisaremos, gracias.</label>
				</div>
				<div class="datos7">
					<label for="">Certificacion  Para todos los efectos legales, certifico que todas las respuestas e informaciones anotadas por mi, en la presente hoja de vida son veraces (C. S. T. Art. 62 Num. 1°) Regimen Laboral Colombiano § 1057(Legis)</label>
				</div>
				<div class="datos7">
					<label for="">Firma del solicitante<br><input type="text"><br>C.C<input type="number" name="" id=""></label>
				</div>
			</div>

			<div class="conten1">
				<label>8. ADMINISTRACION PROCESO DE SELECCION.</label>
			</div>

			<div class="datos3">
				<div class="datos8">	
					<label for="000018">Concepto primer entrevistador:<br><textarea name="entrevistadorP" rows="2" cols="80" value="entrevistadorP" id="000018"></textarea></label>
				</div>
				<div class="datos10">
					<label for="">Vo. Bo. como candidato. Firma</label>
				</div>
				<div class="datos10">
					<label for="000020">Fecha<br><input type="date" name="Fecha4" id="000020"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos8">	
					<label for="000001">Concepto segundo entrevistador:<br><textarea name="entrevistadorS" rows="2" cols="80" value="entrevistadorS" id="000001"></textarea></label>
				</div>
				<div class="datos10">
					<label for="">Vo. Bo. como candidato. Firma</label>
				</div>
				<div class="datos10">
					<label for="000003">Fecha<br><input type="date" name="fecha5" id="000003"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos20">
					<label for="000004">Conclusiones<br><textarea name="Conclusiones1" rows="2" cols="110" name="" id="000004"></textarea></label>
				</div>
				<div class="datos10">
					<label for="000005">Fecha<br><input type="date" name="fecha6" id="000005"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos23">
					<label for="">Candidato seleccionado definitivamente</label>
					Si<input type="radio" name="CDefinitivamenteCD" value="Si"> 
					No<input type="radio" name="CDefinitivamenteCD" value="No"><br>
				
					<label for="">Candidato elegible proximamente</label>
					Si<input type="radio" name="CProximamenteCP" value="Si"> 
					No<input type="radio" name="CProximamenteCP" value="No"> 
				</div>
				<div class="datos24">
					<label for="000008">Contratese a partir del<br><input type="text" name="ContrateseD" id="000008"></label>
				</div>
				<div class="datos24">
					<label for="000009">Sueldo<br><input type="number" placeholder="$" name="Sueldo1" id="000009"></label>
				</div>
				<div class="datos24">
					<label for="0000010">Cargo<br><input type="text" name="Cargo1" id="0000010"></label>
				</div>
				<div class="datos24">
					<label for="0000011">Tipo de contrato<br><input type="text" name="TContrato" id="0000011"></label>
				</div>
			</div>

			<div class="datos3">
				<div class="datos10">	
					<label for="0000012">Referencias verificadas por<br><input type="text" name="ReferenciasV" id="0000012"></label>
				</div>
				<div class="datos10">
					<label for="0000013">Primer entrevistador<br><input type="text" name="PEntrevistador" id="0000013"></label>
				</div>
				<div class="datos10">
					<label for="0000014">Segundo entrevistador<br><input type="text" name="SEntrevistador" id="0000014"></label>
				</div>
				<div class="datos10">
					<label for="0000015">Firma de quien autoriza contratacion<br><input type="text" name="FirmaA" id="0000015"></label>
				</div>					
			</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		(function(){
			function filePreview(input){
				if(input.files && input.files[0]){
					var reader = new FileReader();
					reader.onload = function(e){
						$('#imagePreview').html("<img src='"+e.target.result+"' />");
					}
					reader.readAsDataURL(input.files[0]);
				}
			}
			$('#imagen').change(function(){
				filePreview(this);
			});
		})();
	</script>
	
			<div class="botones">
					<input type="submit" class="button" name="Enviar"/>
					<br>
					<input type="reset"  class="button" value="Limpiar TODOS los campos"/>
			</div>	
	</form>
</body>
</html>