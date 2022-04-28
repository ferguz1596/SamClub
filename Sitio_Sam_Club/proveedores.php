<?php
	session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	
	if(isset($_SESSION["usuario1_valido"]) || isset($_SESSION["usuario2_valido"]))
	{
		$valorBoton = $_REQUEST['btnSig'];
		
		if(isset($valorBoton))
		{
			//$Conectado=mysql_connect("localhost","root","") or die ("NO SE PUDO CONECTAR AL SERVIDOR");
			$Conectado=mysqli_connect("localhost","root","") or die ("NO SE PUDO CONECTAR AL SERVIDOR");
			
		
			$nombre=$_POST["nombre"];
			$RazonSocial=$_POST["razon"];
			$Direccion=$_POST["direccion"];
			$Telefono=$_POST["telefono"];
			$Correo =$_POST["correo"];
			

			$Consulta="Insert Into PROVEEDORES(Nombre,RazonSocial,Direccion,Telefono,Correo) Values ('$nombre','$RazonSocial','$Direccion','$Telefono','$Correo')";
			
			//mysql_select_db("BD_alumno", $Conectado);
			mysqli_select_db($Conectado, "SamsClub");
			
			//Establecer el charset
			mysqli_set_charset($Conectado, "utf8");
			
			//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
			$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
			
			if ($EjecutarConsulta)
			{ 
				print ("<script>alert('El proveedor fue ingresado correctamente');window.location= 'proveedores.php'</script>;");
			}
			else
			{
				print ("<script>alert('Surgió un problema, intente más tarde.\nCodigo de error: <b>".mysqli_errno($Conectado)."');window.location= 'proveedores.php'</script>;");
			}
			//@mysql_free_result($EjecutarConsulta);
			//mysql_close($Conectado);
			@mysqli_free_result($EjecutarConsulta);
			mysqli_close($Conectado);
		}
		else
		{
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/estiloProv.css">
	<script language="javascript" src="javascript/ValidarP.js"></script>
</head>
<body>
	<form name="frmProv" action=""  onsubmit="return ValiPro();" method="POST">
	<table class="centro">
		<tr>
			<td>
				<h2>Proveedores<h2>
			</td>
		</tr>
		<tr>
			<td>
				Nombre:
			</td>
			<td>
					<input type="text" name="nombre" size="30">
			</td>
		</tr>
		<tr>
			<td>
				Raz&oacute;n Social:
			</td>
			<td>
				<input type="text" name="razon" size="20">
			</td>
		</tr>
		<tr>
			<td>
				Direcci&oacute;n:
			</td>
			<td>
				<input type="textarea" name="direccion" size="30">
			</td>
		</tr>
		<tr>
			<td>
				Telefono:
			</td>
			<td>
				<input type="tel" name="telefono" size="20">
			</td>
		</tr>
		<tr>
			<td>
				Correo electr&oacute;nico:
			</td>
			<td>
				<input type="email" name="correo" size="30" placeholder="ejemplo@mail.com">
			</td>
		</tr>
		<tr>
			<td>
				<a href="menuNivel1.php">Atras</a>
			</td>
			<td>
				<input type="submit" name="btnSig"  value="Siguiente" class="btnSig">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
<?php
		}
	}
	else
	{
		print ("<script>
                alert('No tienes acceso a esta página');window.location= 'cerrarSesion.php'</script>;");
	}
?>