<?php
  session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	
	if(isset($_SESSION["usuario1_valido"]))
	{
		$conexion = mysqli_connect("localhost","root","","samsclub");
		if(isset($_REQUEST['btnEliminar']))
		{
		  mysqli_set_charset($conexion, "utf8");
		  
		  $producto = $_POST['Cod_prod'];
		  if($producto)
		  {
			$elim = "UPDATE productos set estado = 2 where Codigo = '$producto'";
			$con = mysqli_query($conexion,$elim);
			if($con)
			{
			  echo "<script>alert('Producto eliminado exitosamente.');</script>";
			}
			else {
			  echo "<script>alert('No se ha encontrado el producto.');</script>";
			}
		  }
		  else{
			echo "<script>alert('No ha ingresado producto.');</script>";
		  }
		}
?>

<html>
	<head><title> Eliminar Producto </title>
		<link rel="stylesheet" type="text/css" href="estilos/estilo_Abastecimiento.css"/>
		<script language="javascript" src=""></script>

	</head>

	<body>

	<section class="Principal">

	<form name= "frmEliminar" action="eliminarProducto.php" method="POST" >

		<center><h2>Eliminar producto</h2></center>

		<table

			<tr>
				<td><center>
				<label> Ingrese codigo de producto: <input type="text" name="Cod_prod" size="40" placeholder="ejm: CAMISA 001"> <input type="submit" name="btnEliminar" value="Eliminar">
				</center>
        </td>
			</tr>
      <tr>
        <td>
          <a href="menuNivel1.php">Regresar</a>
        </td>
      </tr>

		</table>

	</form>
	</section>
	</body>
</html>
<?php
	}
	else
	{
		print ("<script>
                alert('No tienes acceso a esta página');window.location= 'cerrarSesion.php'</script>;");
	}
?>