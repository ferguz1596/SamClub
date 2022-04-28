<?PHP
	session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	
	if(isset($_SESSION["usuario1_valido"]) || isset($_SESSION["usuario2_valido"]))
	{
	
		$valorBoton = $_REQUEST['siguiente'];
		
		if(isset($valorBoton))
		{
			$Conectado=mysqli_connect("localhost","root","",'samsclub') or die ("NO SE PUDO CONECTAR AL SERVIDOR");
			
			//Establecer el charset
			mysqli_set_charset($Conectado, "utf8");
			
			$Idproducto = $_POST['IdProduto'];
			$imagen = $_FILES['imagen']['name'];
			$codigo = $_POST['codigo'];
			$SKU = $_POST['sku'];
			$costo = $_POST['costo'];
			$Idproveedor = $_POST['proveedor'];
			$titulo = $_POST['titulo'];
			$cantidad = $_POST['cantidad'];
			$tipo = $_POST['Tproducto'];
			$talla = $_POST['tallas'];
			$color = $_POST['color'];
			 
			  // Archivo temporal
			//if (($_FILES["imagen"]["type"] == "image/jpg"))
			if (($_FILES["imagen"]["type"] = "image/jpg"))
			{
				// Ruta donde se guardarán las imágenes que subamos
			  $directorio = $_SERVER['DOCUMENT_ROOT'].'/Sitio_Sam_Club/images/';
			  // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
			  move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$imagen);
			} 
			else 
			{
			   //si no cumple con el formato
			   print ("<script>alert('No se puede subir una imagen con ese formato');</script>;");
			}
			
			$query1 = "INSERT INTO PRODUCTOS(IdProducto, Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color) VALUES ('$Idproducto'$imagen','$codigo','$SKU','$costo','$Idproveedor','$titulo','$cantidad','$tipo','$talla','$color')";
			$insertar = mysqli_query($Conectado,$query1);
			
			if ($insertar)
			{ 
				print ("<script>alert('El producto fue ingresado correctamente.');window.location= 'RegistrarProducto.php'</script>;");
			}
			else
			{
				print ("<script>alert('Surgió un problema, intente más tarde.\nCodigo de error: <b>".mysqli_errno($Conectado)."');window.location= 'RegistrarProducto.php'</script>;");
				//echo("Surgio problema al ingresar el producto.<br>");
				//echo("El problema es: <br>");
				//echo("Codigo de error: <b>".mysqli_errno($Conectado)."</b><br>");
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
<head><title></title>
	<link rel="stylesheet" type="text/css" href="estilos/estiloRecuperacion_RegistrarP.css">
	<script type="text/JavaScript" src="javascript/regProducto.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<form name="Recuperacion" method="post" action="" enctype="multipart/form-data" onsubmit="return validarRP();">
	<table >
		<tr>
			<td colspan=4 >
				<p id="Titulo">Agregar Producto</p>
			</td>
		</tr>
			<td>
				<label for="ID">ID Producto:</label>
			</td>
			<td>
				<input type="number" name="IdProduto">
			</td>
		<tr>
			<td>
				<label for="imagen">Agregar imagen:</label>
			</td>
			<td>
				<input type="file" name="imagen">
			</td>
			<td>
				<label for="titulo">Titulo:</label>
			</td>
			<td>
				<input type="text" name="titulo" placeholder="Agregue el titulo del producto">
			</td>
		</tr>
		<tr>
			<td>
				<label for="codigo">Codigo:</label>
			</td>
			<td>
				<input type="text" name="codigo" placeholder="Agregue el codigo del producto">
			</td>
			<td>
				<label for="cantidad" id="cant" >Cantidad:</label>
			</td>
			<td>
				<input type="number" name="cantidad">
			</td>
		</tr>
		<tr>
			<td>
				<label for="sku">SKU:</label>
			</td>
			<td>
				<input type="text" name="sku" placeholder="Agegue el codigo del proveedor">
			</td>
			<td>
				<label for="Tproducto">Tipo de producto:</label>
			</td>
			<td>
				<select name="Tproducto">
					<option value="1" selected>Camisa</option>
					<option value="2">Pantalon</option>
					<option value="3">Zapato</option>
					<option value="4">Calcetin</option>
					<option value="5">Chamarra</option>
					<option value="6">Camiseta</option>
					<option value="7">Sueter</option>
					<option value="8">Boxer</option>
					<option value="9">Jean</option>
					<option value="10">Buzo</option>
					<option value="11">Bermuda</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="costo">Costo:</label>
			</td>
			<td>
				<input type="number" name="costo" maxlength="30">
			</td>
			<td>
				<label for="tallas">Tallas:</label>
			</td>
			<td>
				<input type="checkbox" name="tallas[]" value="28" checked>S
				<input type="checkbox" name="tallas[]" value="30">M
				<input type="checkbox" name="tallas[]" value="36">L
				<input type="checkbox" name="tallas[]" value="40">XL
				<input type="checkbox" name="tallas[]" value="45">XXL
				<input type="checkbox" name="tallas[]" value="55">XXXL
			</td>
		</tr>
		<tr>
			<td>
				<label for="proveedor">Proveedor:</label>
			</td>
			<td>
				<select name="proveedor">
					<option value="1" selected>Sandro Paris</option>
					<option value="2">Hugo Boss</option>
					<option value="3">Paul Smith</option>
					<option value="4">Farrutx</option>
					<option value="5">BROOKS BROTHERS</option>
					<option value="6">Acne Studios</option>
					<option value="7">POLO RALPH LAUREN</option>
					<option value="8">Lacoste</option>
					<option value="9">ALLSAINTS</option>
					<option value="10">River Island</option>
				</select>
			</td>
			<td>
				<label for="color">Color:</label>
			</td>
			<td>
				<input type="checkbox" name="color[]" value="Gris" checked>Gris
				<input type="checkbox" name="color[]" value="Negro">Negro
				<input type="checkbox" name="color[]" value="AzulS">Azul
				<input type="checkbox" name="color[]" value="Rojo">Rojo
				<input type="checkbox" name="color[]" value="Blanco">Blanco
			</td>
		</tr>
		<tr>
			<td>
				<label for="descripcion">Descripcion</label>
			</td>
		</tr>
		<tr>
			<td colspan=4 >
				<textarea name="descripcion" placeholder="Descripcion del producto"></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td colspan=4 id="boton">
				
				<input type="submit" value="Siguiente" name="siguiente"id="enlace">
				<a href="menuNivel1.php" id="enlace" >Atras</a>
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