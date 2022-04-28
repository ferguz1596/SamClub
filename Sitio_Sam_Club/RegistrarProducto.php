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
			
			$idUnico = time();
			//Seleccionar talla - Inicio
			$t1 = $_POST['tallas1'];
			$t2 = $_POST['tallas2'];
			$t3 = $_POST['tallas3'];
			$t4 = $_POST['tallas4'];
			$t5 = $_POST['tallas5'];
			$t6 = $_POST['tallas6'];
			
			if(isset($t1))
			{
				$tallaRecibido = $t1;
			}
			else if(isset($t2))
			{
				$tallaRecibido = $t2;
			}
			else if(isset($t3))
			{
				$tallaRecibido = $t3;
			}
			else if(isset($t4))
			{
				$tallaRecibido = $t4;
			}
			else if(isset($t5))
			{
				$tallaRecibido = $t5;
			}
			else if(isset($t6))
			{
				$tallaRecibido = $t6;
			}
			//print ("<script>alert('Valor talla: $tallaRecibido');</script>;");
			//Seleccionar talla - Fin
			
			//Seleccionar color - Inicio
			$c1 = $_POST['color1'];
			$c2 = $_POST['color2'];
			$c3 = $_POST['color3'];
			$c4 = $_POST['color4'];
			$c5 = $_POST['color5'];
			
			if(isset($c1))
			{
				$colorRecibido = $c1;
			}
			else if(isset($c2))
			{
				$colorRecibido = $c2;
			}
			else if(isset($c3))
			{
				$colorRecibido = $c3;
			}
			else if(isset($c4))
			{
				$colorRecibido = $c4;
			}
			else if(isset($c5))
			{
				$colorRecibido = $c5;
			}
			//Seleccionar color - Fin
			
			$imagen = $idUnico."-".$_FILES['imagen']['name'];
			$codigo = $_POST['codigo'];
			$SKU = $_POST['sku'];
			$costo = $_POST['costo'];
			$Idproveedor = $_POST['proveedor'];
			$titulo = $_POST['titulo'];
			$cantidad = $_POST['cantidad'];
			$tipo = $_POST['Tproducto'];
			$talla = $tallaRecibido;
			$color = $colorRecibido;
			
			  // Archivo temporal
			if (($_FILES['imagen']['type'] = "image/jpg"))
			{
				// Ruta donde se guardarán las imágenes que subamos
			  $directorio = $_SERVER['DOCUMENT_ROOT'].'/Sitio_Sam_Club/images/';
			  // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
			  move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$imagen);
			  
			  $query1 = "INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, idProveedor,Titulo, Cantidad, IdTipoProducto, Tallas, Color) VALUES ('$imagen','$codigo','$SKU',$costo,$Idproveedor,'$titulo', $cantidad, $tipo, $talla,'$color');";
				$insertar = mysqli_query($Conectado,$query1);
				
				if ($insertar)
				{
					//print ("<script>alert('Llega hasta este punto insertar');</script>;");
					print ("<script>alert('El producto fue ingresado correctamente.');window.location= 'RegistrarProducto.php'</script>;");
				}
				else
				{
					//print ("<script>alert('Llega hasta este punto ELSE');</script>;");
					print ("<script>alert('Surgió un problema, intente más tarde.\nCodigo de error: ".mysqli_errno($Conectado)."<b>')</script>;");
					//echo("Surgio problema al ingresar el producto.<br>");
					//echo("El problema es: <br>");
					//echo("Codigo de error: <b>".mysqli_errno($Conectado)."</b><br>");
				}
			}
			else
			{
			   //si no cumple con el formato
			   print ("<script>alert('No se puede subir una imagen con ese formato');</script>;");
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
<head><title>Registrar Producto</title>
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
				<!--<label for="ID">ID Producto:</label>-->
			</td>
			<td>
				<!--<input type="number" name="IdProduto">-->
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
				<input type="text" id="txtTitulo" name="titulo" placeholder="Agregue el titulo del producto">
			</td>
		</tr>
		<tr>
			<td>
				<label for="codigo">Codigo:</label>
			</td>
			<td>
				<input type="text" id="txtCodigo" name="codigo" placeholder="Agregue el codigo del producto">
			</td>
			<td>
				<label for="cantidad" id="txtCantidad" >Cantidad:</label>
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
				<input type="text" id="txtSKU" name="sku" placeholder="Agegue el codigo del proveedor">
			</td>
			<td>
				<label for="Tproducto">Tipo de producto:</label>
			</td>
			<td>
				<?php
					$conexion=mysqli_connect("localhost","root","",'samsclub');
					$consulta1 = "SELECT * FROM proveedores";
					$consulta2 = "SELECT * FROM tipoproducto";
					$resultado = mysqli_query($conexion,$consulta1);
					$resultado2 = mysqli_query($conexion,$consulta2);
					mysqli_close($conexion);
				?>
				<select name="Tproducto">
					<!--<?php /*while($row = $resultado2->fetch_assoc())

					 		foreach ($resultado2 as $resultado2){?>
						<option value="<?php echo $resultado2['IdTipoProducto']; ?>"><?php echo $resultado2['TipoProducto']; ?></option>
				<?php }*/ ?>-->
				<?php while($row = $resultado2->fetch_assoc()) {?>
						<option value="<?php echo $row['IdTipoProducto']; ?>"><?php echo $row['TipoProducto']; ?></option>
				<?php } ?>
					<!--<option value="1" selected>Camisa</option>
					<option value="2">Pantalon</option>
					<option value="3">Zapato</option>
					<option value="4">Calcetin</option>
					<option value="5">Chamarra</option>
					<option value="6">Camiseta</option>
					<option value="7">Sueter</option>
					<option value="8">Boxer</option>
					<option value="9">Jean</option>
					<option value="10">Buzo</option>
					<option value="11">Bermuda</option>-->
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="costo">Costo:</label>
			</td>
			<td>
				<input type="number" id="txtCosto" name="costo" maxlength="30">
			</td>
			<td>
				<label for="tallas">Tallas:</label>
			</td>
			<td>
				<input type="checkbox" name="tallas1" onClick="disableOthersT1(this)" value="28" checked>S
				<input type="checkbox" name="tallas2" onClick="disableOthersT2(this)" value="30">M
				<input type="checkbox" name="tallas3" onClick="disableOthersT3(this)" value="36">L
				<input type="checkbox" name="tallas4" onClick="disableOthersT4(this)" value="40">XL
				<input type="checkbox" name="tallas5" onClick="disableOthersT5(this)" value="45">XXL
				<input type="checkbox" name="tallas6" onClick="disableOthersT6(this)" value="55">XXXL
			</td>
		</tr>
		<tr>
			<td>
				<label for="proveedor">Proveedor:</label>
			</td>
			<td>
				<select name="proveedor">
					<?php while($row = $resultado->fetch_assoc()) {?>
						<option value="<?php echo $row['IdProveedor']; ?>"><?php echo $row['Nombre']; ?></option>
				<?php } ?>

					<!--<option value="1" selected>Sandro Paris</option>
					<option value="2">Hugo Boss</option>
					<option value="3">Paul Smith</option>
					<option value="4">Farrutx</option>
					<option value="5">BROOKS BROTHERS</option>
					<option value="6">Acne Studios</option>
					<option value="7">POLO RALPH LAUREN</option>
					<option value="8">Lacoste</option>
					<option value="9">ALLSAINTS</option>
					<option value="10">River Island</option>-->
				</select>
			</td>
			<td>
				<label for="color">Color:</label>
			</td>
			<td>
				<input type="checkbox" name="color1" onClick="disableOthersA(this)" value="Gris"  checked>Gris
				<input type="checkbox" name="color2" onClick="disableOthersB(this)" value="Negro">Negro
				<input type="checkbox" name="color3" onClick="disableOthersC(this)" value="AzulS">Azul
				<input type="checkbox" name="color4" onClick="disableOthersD(this)" value="Rojo">Rojo
				<input type="checkbox" name="color5" onClick="disableOthersE(this)" value="Blanco">Blanco
			</td>
		</tr>
		<tr>
			<td>
				<label for="descripcion">Descripcion</label>
			</td>
		</tr>
		<tr>
			<td colspan=4 >
				<textarea name="descripcion" id="txtDescripcion" placeholder="Descripcion del producto"></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td colspan=4 id="boton">

				<input type="submit" value="Siguiente" name="siguiente"id="enlace">
				<?php
					if(isset($_SESSION["usuario1_valido"]))
					{
				?>
				<a href="menuNivel1.php" id="enlace" >Atras</a>
				<?php
					}
					else if(isset($_SESSION["usuario2_valido"]))
					{
				?>
				<a href="menuNivel2.php" id="enlace" >Atras</a>
				<?php
					}
				?>
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
