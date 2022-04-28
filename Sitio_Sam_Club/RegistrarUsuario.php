<?php
	session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	
	$valorBoton = $_REQUEST['btnEnviar'];
	
	if(isset($valorBoton))
	{
			//$Conectado=mysql_connect("localhost","root","") or die ("NO SE PUDO CONECTAR AL SERVIDOR");
			$Conectado=mysqli_connect("localhost","root","") or die ("NO SE PUDO CONECTAR AL SERVIDOR");
			//mysql_select_db("BD_alumno", $Conectado);
			mysqli_select_db($Conectado, "SamsClub")or die ("No se pudo seleccionar la base de datos");
				
			//Establecer el charset
			mysqli_set_charset($Conectado, "utf8");
			
			$usuario=$_POST["txtUsuario"];
			$nombres=$_POST["txtNombre"];
			$apellidos=$_POST["txtApellido"];
			$Correo=$_POST["txtmail"];
			$Contrasena=$_POST["txtPdw"];
			$Nivel=3;
			$Direccion=$_POST["txtDireccion"];
			$Numero=$_POST["txtNumero"];
			
			//Consultar si existe el usuario ingresado
			$instruccion = "select Nivel from usuarios where usuario = '$usuario'";
			$consulta2 = mysqli_query ($Conectado, $instruccion) or die ("Fallo en la consulta");
			$nfilas = mysqli_num_rows ($consulta2);//Si retorna filas, no se creará el usuario
			if($nfilas > 0)
			{
				print ("<script>alert('Este usuario ya existe, intente con uno diferente.');window.location= 'RegistrarUsuario.php'</script>;");
			}
			else
			{
				$Consulta="Insert Into USUARIOS(Usuario,Nombres,Apellidos,Correo,Contrasena,Nivel,Direccion,telefono, estadoU) Values ('$usuario','$nombres','$apellidos','$Correo','$Contrasena','$Nivel','$Direccion','$Numero', 1);";
				
				//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
				$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
				
				if ($EjecutarConsulta)
				{ 
					$instruccion = "select Nivel from usuarios where usuario = '$usuario'";
					$consulta2 = mysqli_query ($Conectado, $instruccion) or die ("Fallo en la consulta");
					$fila = mysqli_fetch_array ($consulta2);//Nivel de usuario
					$nfilas = mysqli_num_rows ($consulta2);//numero de filas
					
					if ($nfilas > 0)
					{
						$usuario_valido = $usuario;
						
						$nivel = $fila["Nivel"];
						
						if (isset($usuario_valido) && $nivel == 3)
						{
							$_SESSION["usuario3_valido"] = $usuario_valido;
							header('Location: menuNivel3.php');//Redireccionar a Menú de Clientes
						}
					}
					else
					{
						print ("<script>alert('Algo salió mal. Intenta nuevamente.');window.location= 'RegistrarUsuario.php'</script>;");
					}
				}
				else
				{
					print ("<script>alert('Surgio problema al ingresar el usuario.\nCodigo de error: <b>".mysqli_errno($Conectado)."');window.location= 'RegistrarUsuario.php'</script>;");
					//echo("Surgio problema al ingresar el usuario.<br>");
					//echo("El problema es: <br>");
					//echo("Codigo de error: <b>".mysqli_errno($Conectado)."</b><br>");
				}
				//@mysql_free_result($EjecutarConsulta);
				//mysql_close($Conectado);
				@mysqli_free_result($EjecutarConsulta);
				@mysqli_free_result($consulta2);
				mysqli_close($Conectado);
			}
			
	}
	else
	{
?>

<html>
	<head>
		<title>Registrar Usuario</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<LINK REL=StyleSheet HREF="estilos/Estilo_Carro-Formulario.css" TYPE="text/css">
		<script type="text/JavaScript" src="javascript/regUsuario.js"></script>
	</head>
	<body>
			<section class="Principal">
				<form name="FrmRegistro" method="Post" action="" onsubmit="return validarRU();">
					<hr>
					<footer>
						<label for "Nombre" class="Registro">Registo de Usuarios</label></br>
					</footer>
							
					<label for "Nombre">Nombre: </label>
					<input type="Text" id="Nom" name="txtNombre" placeholder="Escriba sus 2 Nombres"/></br></br>
							
					<label for "Apellido">Apellido: </label> 
					<input type="text" id="Ape"  name="txtApellido" placeholder="Escriba sus 2 Apellidos"></br></br>
					
					<label for "Usuario">Usuario: </label> 
					<input type="text" id="Usu"  name="txtUsuario" placeholder="miUsuario"></br></br>
					
					<label for "Correo">Correo: </label>
					<input type="e-mail" id="Corr"  name="txtmail" placeholder="Ejemplo@mail.com"></br></br>
							
					<label for "PDw">Contrase&ntilde;a: </label>
					<input type="password" id="Cn"  name="txtPdw" placeholder="Escriba su Contrase&ntilde;a"></br></br>
							
					<label for "Direccion">Direccion: </label>
					<textarea type="textarea" id="Direc"  name="txtDireccion" placeholder="Su Direccion"></textarea></br></br>
							
					<label for "Numero">Numero: </label>
					<input type="number" maxlength="8" id="Num"  name="txtNumero" placeholder="Escriba su numero sin guion"></br></br>
							
					<input type="Submit" id="btn" name="btnEnviar">
					</br>
					<a href="menuNivel1.php">Regresar</a>
				</form>
			</section>
	</body>
</html>
<?php
	}
?>