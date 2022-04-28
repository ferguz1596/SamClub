<?php
	session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	if(isset($_SESSION["usuario1_valido"]) || isset($_SESSION["usuario2_valido"]))
	{
		echo "<html>
		<head><title>Consultar Productos</title>
			<link rel='stylesheet' type='text/css' href='estilos/estilo_Abastecimiento.css'/>
			<script language='javascript' src='javascript/ValidarAB.js'></script>
			
		</head>

		<body>
		
		<section class='Principal'>
			
		<form name= 'frmAbastecimiento' action='' method='POST' >
		
			<center><h2>Productos</h2></center>";
		$Conexion = mysqli_connect("localhost","root","","samsclub") or die ("No se conecta");
		//Establecer el charset
		mysqli_set_charset($Conexion, "utf8");
		
		$result = mysqli_query($Conexion, "SELECT * FROM productos WHERE estado = 1") or die ("No se puede");
			
		 echo "<table width='50%' border = '1' align='center'>";
		 echo "<tr>";
		 echo "<td >Codigo </td> <td> Producto</td><td> Cantidad</td>";
		 echo "</tr>";
		 while ($row = mysqli_fetch_array($result))
		 {
			echo	 "<tr>";
			echo "<td>", $row['Codigo'],"</td><td>",$row['Titulo'],"</td><td>",$row['Cantidad'],"</td>";
			echo "</td>";		
		 }
		 echo "</table>";
		 if(isset($_SESSION["usuario1_valido"]))
		 {
			echo  "<br><a href='menuNivel1.php'>Regresar al Menú Principal</a></form>";
		 }
		 else if(isset($_SESSION["usuario2_valido"]))
		 {
			echo  "<br><center><a href='menuNivel2.php'>Regresar al Menú Principal</a></center>";
		 }
		 
		 mysqli_close($Conexion);
	}
	else
	{
		print ("<script>alert('No tienes acceso a esta página');window.location= 'cerrarSesion.php'</script>;");
	}
?>