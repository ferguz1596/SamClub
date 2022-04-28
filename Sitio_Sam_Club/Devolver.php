<?php
	session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	
	if(isset($_SESSION["usuario1_valido"]) || isset($_SESSION["usuario1_valido"]) || isset($_SESSION["usuario3_valido"]))
	{
		$conexion = new mysqli('localhost','root','','samsclub');
		if(isset($_REQUEST['btnLlenar']))
		{
			$idVenta = $_REQUEST['id'];
			$producto = $_REQUEST['producto'];
			$razon = $_REQUEST['razon'];
			$boton = $_REQUEST['btnLlenar'];
			$query1 = "INSERT INTO devolverproducto(IdVenta,Producto,Razon) VALUES ($idVenta,'$producto','$razon')";
			$insertar = mysqli_query($conexion,$query1);
		}
		else if(isset($_REQUEST['btnBuscar']))
		{
			$query2 = "SELECT a.idventa, a.cantidad, b.titulo, a.precio, a.subtotal FROM detalleventa a, productos b WHERE a.idproducto = b.idproducto and a.idventa = '$_POST[id]'";
			$buscar = mysqli_query($conexion,$query2);
		}
		if ($query1)
		{ 
			print ("<script>alert('Lamentamos que el producto haya salido defectuoso Muchas Gracias');window.location= 'Devolver.php'</script>;");
			//echo ("Lamentamos que el producto haya salido defectuoso Muchas Gracias.<br>");
		}
		else
		{
			print ("<script>alert('No se pudo devolver el producto. \nError: ".mysqli_errno($conexion)."');window.location= 'Devolver.php'</script>;");
			//echo("No se pudo devolver el producto.<br>");
			//echo("El problema es: <br>");
			//echo("Codigo de error: <b>".mysqli_errno($Conectado)."</b><br>");
		}
 ?>
<html>
<head>
	<title>Devolver Producto</title>
	<link rel="stylesheet" type="text/css" href="estilos/estiloDev.css">
	<script type="text/JavaScript" src="javascript/devolver.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<center><h2>Devolver Producto</h2></center><br><br>
	</form>
	<form name="form1" action="Devolver.php" method="post" onsubmit="return devolver();">
		ID&nbsp;&nbsp;&nbsp;<input type="text" name="id" placeholder="ID de la factura">&nbsp;&nbsp;&nbsp;
		<input class="btnLlenar" type="submit" name="btnLlenar" value="Llenar">&nbsp;&nbsp;&nbsp;
		<input class="btnBuscar" type="submit" name="btnBuscar" value="Buscar">
		<table id="tabla" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					Cantidad
				</td>
				<td id="producto">
					Producto
				</td>
				<td>
					Precio Unidad
				</td>
				<td>
					Monto
				</td>
			</tr>
			<?php
			if(isset($_REQUEST['btnBuscar']))
			{
			foreach ($buscar as $buscar) {
			?>
			<tr>
				<td><?php echo $buscar['cantidad']; ?></td>
				<td><?php echo $buscar['titulo']; ?></td>
				<td><?php echo $buscar['precio']; ?></td>
				<td><?php echo $buscar['subtotal']; ?></td>
			</tr>
		<?php }} ?>
		</table>
		El producto que se desea devolver es:<input type="text" id="txtProducto" name="producto" size="30">
		<br><br><br>
		<b>¿Cu&aacute;l es la raz&oacute;n por la que quieres devolver el producto?</b><br><br>
		<textarea name="razon" rows="5" cols="56" id="txtRazon"></textarea><br><br>
		<?php
		if(isset($_SESSION["usuario1_valido"]))
		{
		?>
		<a href="menuNivel1.php">Regresar</a>
		<?php
		}
		else if(isset($_SESSION["usuario2_valido"]))
		{
		?>
		<a href="menuNivel2.php">Regresar</a>
		<?php
		}
		else if(isset($_SESSION["usuario3_valido"]))
		{
		?>
		<a href="menuNivel3.php">Regresar</a>
		<?php
		}
		?>
	</form>
</body>
</html>
<?php
	}
	else
	{
		print ("<script>alert('No tienes acceso a esta página');window.location= 'cerrarSesion.php'</script>;");
	}
?>