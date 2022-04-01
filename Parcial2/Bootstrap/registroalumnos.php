
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="logo.png">
	<title>Registro</title>
	<style >
		body
		{
			font-family: Arial; background-color: #6C0511; box-sizing: border-box;
		}
		form
		{
			background-color: #F6F4DC;
			margin: 0 auto;
			width: 400px;
			padding: 10px;
			border-radius: 10px;
			
		}
		h1
		{
			background-color: #F6F4DC;
			margin: 0 auto;
			width: 300px;
			padding: 10px;
			border-radius: 10px;
		}
		img
		{
			position: center;
			margin: 0 auto;
			width: 300px;
		}

		input
		{
			width: 280px;
		}
	</style>
	<script>
		window.onload = cargaEventos;
		function cargaEstatura(){
			document.getElementById('estatura').addEventListener("keypress",function(){validaNumero(1,2)});
		}

		function validaNumeroEstatura(){
			e    = window.event;
			nInt = arguments[0];
			nDec = arguments[1];

			if(nInt===undefined){
				patron = new RegExp("(^[0-9]*[.]?[0-9]*?$)");
			}else{
				if(nDec===undefined){
					patron = new RegExp("(^[0-9]{0,"+nInt+"}$)|(^[0-9]{0,"+nInt+"}[.][0-9]*?$)");
				}else{
					if(nDec>0){
						patron = new RegExp("(^[0-9]{0,"+nInt+"}$)|(^[0-9]{0,"+nInt+"}[.][0-9]{0,"+nDec+"}$)");
					}else{
						patron = new RegExp("(^[0-9]{0,"+nInt+"}$)");
					}
				}
			}

			cString = e.target.value+""+String.fromCharCode(e.charCode);
			if( cString.search(patron)==-1 ){
				e.preventDefault();
			}
		}
	</script>
	<script>
		window.onload = cargaEventos;
		function cargaEventos(){
			document.getElementById('peso').addEventListener("keypress",function(){validaNumero(2,2)});
		}

		function validaNumero(){
			e    = window.event;
			nInt = arguments[0];
			nDec = arguments[1];

			if(nInt===undefined){
				patron = new RegExp("(^[0-9]*[.]?[0-9]*?$)");
			}else{
				if(nDec===undefined){
					patron = new RegExp("(^[0-9]{0,"+nInt+"}$)|(^[0-9]{0,"+nInt+"}[.][0-9]*?$)");
				}else{
					if(nDec>0){
						patron = new RegExp("(^[0-9]{0,"+nInt+"}$)|(^[0-9]{0,"+nInt+"}[.][0-9]{0,"+nDec+"}$)");
					}else{
						patron = new RegExp("(^[0-9]{0,"+nInt+"}$)");
					}
				}
			}

			cString = e.target.value+""+String.fromCharCode(e.charCode);
			if( cString.search(patron)==-1 ){
				e.preventDefault();
			}
		}
	</script>
	<script type="text/javascript">
		function validarchk()
		{
			var chk = document.getElementById('chk');
			var txt = document.getElementById('txt');
			if(chk.checked)
			{
				txt.disabled='';
				txt.hidden='';

			}
			else
			{
				txt.value='';
				txt.disabled='disabled';
				txt.hidden='hidden';

			}
		}
	</script>
	<script type="text/javascript">
		function validarchk2()
		{
			var chk = document.getElementById('chk2');
			var txt = document.getElementById('txt2');
			if(chk2.checked)
			{
				txt2.disabled='';
				txt2.hidden='';

			}
			else
			{
				txt2.value='';
				txt2.disabled='disabled';
				txt2.hidden='hidden';

			}
		}
	</script>
</head>



<body>
	<div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
     	<p class="center">
		<h1><b> Registro de alumno </b></h1>
	</p>
	<form action="altasmysql.php" method="POST" enctype="multipart/form-data">
		<b>Datos de perfil</b><hr>
		<b> Curp del alumno </b> 
		<input type="text" class="field" name="CURP"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required><br><br>
		<b>Genero</b> 
		<select name="Sexo" class="field" required>
			<option>Masculino</option>
			<option>Femenino</option>
			<option>Otro</option>
		</select><br><br>
		<b> Nombre del alumno </b> 
		<input type="text" name="NombreAlumno"  class="field"required><br><br>
		<b> Apellido Paterno </b> 
		<input type="text" name="ApellidoPaterno" class="field" required><br><br>
		<b> Apellido Materno </b> 
		<input type="text" name="ApellidoMaterno" class="field" > <br><br>
		<b> Grado y Grupo:</b>
		<select name="grado" id="grado" class="field" required>
				<option value="1">1°A</option>
				<option value="2">1°B</option>
				<option value="3">1°C</option>
				<option value="4">1°D</option>
				<option value="5">1°E</option>
				<option value="6">1°F</option>
				<option value="7">1°G</option>
				<option value="8">1°H</option>
				<option value="9">1°I</option>
				<option value="10">2°A</option>
				<option value="11">2°B</option>
				<option value="12">2°C</option>
				<option value="13">2°D</option>
				<option value="14">2°E</option>
				<option value="15">2°F</option>
				<option value="16">2°G</option>
				<option value="17">2°H</option>
				<option value="18">2°I</option>
				<option value="19">3°A</option>
				<option value="20">3°B</option>
				<option value="21">3°C</option>
				<option value="22">3°D</option>
				<option value="23">3°E</option>
				<option value="24">3°F</option>
				<option value="25">3°G</option>
				<option value="26">3°H</option>
				<option value="27">3°1</option>

		
		</select><br><br>
		<b> Edad</b> <br>
		<input type="number" name="Edad"  class="field" required><br><br>
		<b> Estatura</b> <br>
		<input type="number"  id="Estatura" step="0.01" name="Estatura"  placeholder ="Ejemplo: 1.50" required><br><br>
		<b> Peso</b> <br>
		<input type="number" id="peso" step="0.01" name="Peso"  placeholder ="Ejemplo: 60.87" required><br><br>
		<b>El alumno padece de alguna enfermedad/alergia:</b>
		<input type="checkbox" id="chk" name="chkenfermedad" onchange="validarchk();" >Si
		<input type="text" hidden="hidden" name="Enfermedad" id="txt" placeholder ="Ingrese enfermedad">
		<br>[Si tiene mas de una enfermedad/alergia, escribirlas separandolas con coma (,)]. <br><br>

		<b>El alumno padece de alguna discapacidad:</b>
		<input type="checkbox" id="chk2" name="chkdiscapacidad" onchange="validarchk2();" >Si
		<input type="text" hidden="hidden" name="Discapacidad" id="txt2" placeholder ="Ingrese discapacidad">
		<br>[Si tiene mas de una discapacidad, escribirlas separandolas con coma (,)]. <br><br>

		<b>Datos de usuario</b><hr>
		<b> Correo electronico</b> 
		<input type="email" name="Correo" class="field" required><br><br>
		<b> Contraseña </b> <br>
		<input type="password" name="Password" class="field" required>  <br>Guarde el usuario y contraseña<br><br>
		<b> Telefono </b><br> 
		<input type="text" name="Telefono" class="field" required><br><br>

		<input type="submit" name="Guardar" value="Guardar" class=".boton_personalizado" style="background-color: lightblue;">   
	</form>
	<form action="tiporegistro.php">
		<input type="submit" name="regresar" value="Regresar" style="background-color: mediumvioletred;">
	</form>
	
     </div>
      
</div>

	
</body>
</html>