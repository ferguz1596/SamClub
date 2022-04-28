<?php
	session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	
	if(isset($_SESSION["usuario1_valido"]) || isset($_SESSION["usuario1_valido"]))
	{
	echo "<html>
	<head><title> Abastecimiento </title>
		<link rel='stylesheet' type='text/css' href='../estilos/estilo_Abastecimiento.css'/>
		<script language='javascript' src='javascript/ValidarAB.js'></script>
		
	</head>

	<body>
	
	<section class='Principal'>
		
	<form name= 'frmAbastecimiento' action='php/MostrarAB.php' onSubmit='return ValidarAb();'  method='POST' >
	
		<center><h2>Abastecimiento</h2></center>

		<table
				
			<tr>
				<td><center>
				<label> 
				<p>Codigo del producto: </br>
 					
					";
					$va = $_GET['Cod_Producto'];
	$_SESSION['va'] = $va;
	print("$va");
	echo"
				  </center></td>
				  </tr>
				  
				  </table>
				  	  </p>
                      ";

	$va = $_GET['Cod_Producto'];
	$_SESSION['va'] = $va;
	
	$Conexion = mysqli_connect("localhost","root","","samsclub") or die ("No se   conecta");
	//Establecer el charset
	mysqli_set_charset($Conexion, "utf8");
	
	$result = mysqli_query($Conexion, "SELECT * FROM productos WHERE Codigo = '$va'") or die ("No se puede");
		
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
		echo  " <a href='../Abastecimiento.php'>Atras</a> </br><a href='../menuNivel1.php'>Regresar al Menú Principal</a></form>";
	}
	else if(isset($_SESSION["usuario2_valido"]))
	{
		echo  " <a href='../Abastecimiento.php'>Atras</a> </br><a href='../menuNivel2.php'>Regresar al Menú Principal</a></form>";
	}
	 
	 
	 echo "   <form  name='ag' action='ActualizarS.php' method='get' onsubmit='ff();' >
    <table width='85%' height='35' border='1'>
				  <tr>
				    <td width='100%'><label>Agregar stock: </label></td>
				    <td><input type='text' name='txtAgg' placeholder='Ejemplo: 10'></td>
				    <td><input type='submit' name='btnAgg' value='Agregar'></td>
			      </tr>
	  </table>
    </table>
    </form>";
	 
	
	 $_GET['txtbu'] = $va;
	
	 mysqli_close($Conexion);
	}
else
{
	print ("<script>alert('No tienes acceso a esta página');window.location= 'cerrarSesion.php'</script>;");
}	
?>