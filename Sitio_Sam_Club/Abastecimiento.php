<?php
	session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	
	if(isset($_SESSION["usuario1_valido"]) || isset($_SESSION["usuario1_valido"]))
	{
?>
<html>
	<head><title> Abastecimiento </title>
		<link rel="stylesheet" type="text/css" href="estilos/estilo_Abastecimiento.css"/>
		<script language="javascript" src="javascript/ValidarAB.js"></script>
		
	</head>

	<body>
	
	<section class="Principal">
		
	<form name= "frmAbastecimiento" action="php/MostrarAB.php" onSubmit="return ValidarAb();"  method="get" >
	
		<center><h2>Abastecimiento</h2></center>

		<table
				
			<tr>
				<td><center>
				<label> 
				<p>Codigo del producto:
  <input type="text" name="Cod_Producto" size="40"> <input type="submit" name="btnBuscar" value="Buscar">
				  </center></td>
				  </tr>
				  
				  </table>
				  	  </p>
                      </form>
                      
	  <form  name="agg" action="Gabi.php" method="get" onSubmit="ff();" >
    <table width="85%" height="35" border="1">
				  <tr>
				    <td width="100%"><label>Agregar stock: </label></td>
				    <td><input type="text" name="txtAgg" placeholder="Ejemplo: 10"></td>
				    <td><input type="submit" name="btnAgg" value="Agregar"></td>
			     
	  </table>
    <?php
	if(isset($_SESSION["usuario1_valido"]))
	{
	?>
	<a href="menuNivel1.php">Atras</a>
	<?php
	}
	else if(isset($_SESSION["usuario2_valido"]))
	{
	?>
	<a href="menuNivel2.php">Atras</a>
	<?php
	}
	?>
	  </form>
				<p>&nbsp;</p>
		
	
	</section>
	</body>
</html>
<?php
	}
	else
	{
		print ("<script>alert('No tienes acceso a esta página');window.location= 'cerrarSesion.php'</script>;");
	}
?>