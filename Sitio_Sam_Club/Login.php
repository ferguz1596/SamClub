<?php
	session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	
	$usuario = $_REQUEST['usuario'];
	$clave = $_REQUEST['pass'];
	
	if (isset($usuario) && isset($clave))
	{
		$conexion = mysqli_connect ("localhost", "root", "") or die ("No se puede conectar con el servidor");
		mysqli_select_db ($conexion, "SamsClub") or die ("No se puede seleccionar la base de datos");
		
		//Establecer el charset
		mysqli_set_charset($Conectado, "utf8");

		$instruccion = "select Nivel, estadoU from usuarios where usuario = '$usuario'" .
		" and Contrasena = '$clave'";
		$consulta = mysqli_query ($conexion, $instruccion) or die ("Fallo en la consulta");
			 
		$fila = mysqli_fetch_array ($consulta);//Nivel de usuario
		$nfilas = mysqli_num_rows ($consulta);//numero de filas
		  
		mysqli_close ($conexion);

		if ($nfilas > 0)
		{
			$usuario_valido = $usuario;
			
			$nivel = $fila["Nivel"];
			$estadoUsuario = $fila["estadoU"];
		}
	}

?>


<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN"
	   "http://www.w3.org/TR/html4/strict.dtd"> 
<HTML LANG="es">
<head>
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" type="text/css" href="estilos/estiloPass.css">
	
	<script type="text/JavaScript" src="javascript/login.js">
		</script>
</head>
<body>

<?PHP

	if (isset($usuario_valido) && $nivel == 1 && $estadoUsuario == 1)
	{
		$_SESSION["usuario1_valido"] = $usuario_valido;
		header('Location: menuNivel1.php');//Redireccionar a Menú de Administrador
	}
	else if (isset($usuario_valido) && $nivel == 2 && $estadoUsuario == 1)
	{
		$_SESSION["usuario2_valido"] = $usuario_valido;
		header('Location: menuNivel2.php');//Redireccionar a Menú de Empleado
	}
	else if (isset($usuario_valido) && $nivel == 3 && $estadoUsuario == 1)
	{
		$_SESSION["usuario3_valido"] = $usuario_valido;
		header('Location: cerrarSesion.php');//Redireccionar a Menú de Clientes
	}
	else if(isset($usuario))
	{
		print ("<script>
                alert('Algo ha salido mal, intenta de nuevo');window.location= 'Login.php'</script>;");
	}
	else
	{
?>

<form name="frmIngresar" action="" method="POST" onsubmit="return validarUsuario()">
	<div class="border">
			<table class="login">
				<tr>
					<td class="img" rowspan="3">
							<img src="images/login.png">
					</td> 
				</tr>
				<tr class="us">
					<td>Usuario:</td>
					<td><input type="text" name="usuario" id="usuario" size="25" ></td>
				</tr>
				<tr class="pass">
					<td>Contrase&ntilde;a:</td>
					<td><input type="password" name="pass" id="pass" size="25"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="btn" value="Ingresar" class="btningresar">
					</td>
					<td >
						<a href="RecuperacionContrasena.php">Olvide mi contrase&ntilde;a</a>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><a href="RegistrarUsuario.php">No tengo una cuenta</a></td>
				</tr>
				<tr>
					<td><a href="index.html">Regresar</a></td>
				</tr>
			</table>
		</div>
	</div>
</form>
<?PHP
   }
?>
</body>
</html>