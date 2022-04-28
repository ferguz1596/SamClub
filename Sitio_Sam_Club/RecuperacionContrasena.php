<?php
	error_reporting(E_ALL ^ E_NOTICE);
	
	$valorBoton = $_REQUEST['Continuar'];
	//$clave = $_REQUEST['pass'];
	
	if (isset($valorBoton))
	{
		$correo = $_POST['Contrasena'];
		
		$conexion = mysqli_connect ("localhost", "root", "") or die ("No se puede conectar con el servidor");
		mysqli_select_db ($conexion, "SamsClub") or die ("No se puede seleccionar la base de datos");

		//Establecer el charset
		mysqli_set_charset($Conectado, "utf8");
		
		$instruccion = "select Contrasena from usuarios where correo = '$correo'";
		$consulta = mysqli_query ($conexion, $instruccion) or die ("Fallo en la consulta");
			 
		$valPassArray = mysqli_fetch_array ($consulta);//Nivel de usuario
		$nfilas = mysqli_num_rows ($consulta);//numero de filas
		  
		mysqli_close ($conexion);

		if ($nfilas > 0)
		{
			$valPass = $valPassArray["Contrasena"];
			if ($valPass != "")
			{ 
				print ("<script>alert('Su clave es: $valPass');window.location= 'Login.php'</script>;");
			}
			else
			{
				print ("<script>alert('Surgió un problema, intente más tarde.\nCodigo de error: <b>".mysqli_errno($Conectado)."');window.location= 'RecuperacionContrasena.php'</script>;");
			}
			//@mysql_free_result($EjecutarConsulta);
			//mysql_close($Conectado);
			@mysqli_free_result($EjecutarConsulta);
			mysqli_close($Conectado);
		}
	}
	else
	{
?>

<html>
<head><title></title>
	<link rel="stylesheet" type="text/css" href="estilos/estiloRecuperacion_RegistrarP.css">
	
	<script type="text/JavaScript" src="javascript/RecuperacionContrasena.js"></script>
</head>
<body>
	<form name="Recuperacion" method="post" action="RecuperacionContrasena.php" onsubmit="return validarR();">
		<p id="Titulo" >Olvidó su contraseña</p>
		<p>Escriba su dirección de correo electrónico para iniciar la recuperacion de la contraseña</p>
		
		<label for="lblCorreo" id="lblCorreo" >Dirección de correo electrónico:</label> 
		<input type="email" name="Contrasena" id="correo" value="" placeholder="Ejemplo@gmail.com"><br><br>
		<input type="submit" id="contra" value="Continuar" name="Continuar">
		<a href="Login.php" id="contra" > Atras </a><br>
	</form>
</body>
</html>

<?php
	}
?>