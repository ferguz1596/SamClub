<?PHP
   session_start ();
?>

<html>
	<head><title>Contactanos</title>
	<link rel="stylesheet" type="text/css" href="estilos/estiloFormularios.css" />
	<meta charset="utf-8">
	</head>
		<body>
			<?PHP
			   if (isset($_SESSION["usuario2_valido"]))
			   {
			?>
			<header><!-- Inicio HEADER -->
				<a href="index.html"><img src="images/logo2.jpg" id="imagen" href="index.html"></a>
				<br>
				<h1><label for "Encabezado">La Tienda del Hombre</label></h1>
			</header><!-- Fin HEADER -->
			<aside id="asideMenu"><!-- Inicio ASIDE -->
				<ul id="menuLateral">
					<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
					<li><a href="menuNivel2.php">Inicio</a></li>
					<li><a href="#">Modificar mi cuenta</a></li>
				</ul>
			</aside><!-- Fin ASIDE -->
			<section id="sectionP"><!-- Inicio SECTION -->
				<article id="encabezadoTabla">
					<ul id="menuCentral">
						<li><a href="RegistrarProducto.php">Registrar Productos</a></li>
						<li><a href="eliminarProducto.php">Eliminar Productos</a></li>
						<li><a href="Devolver.html">Devolver Productos</a></li>
						<li><a href="Abastecimiento.php">Abastecimiento de Productos</a></li>
						<li><a href="proveedores.php">Registrar Proveedores</a></li>
						<li><a href="eliminar-proveedor.php">Eliminar Proveedores</a></li>
					</ul>
				</article>
			</section><!-- Fin SECTION -->
			<footer><!-- Inicio FOOTER -->
				<label for "Pie" id="txtPie">Creado por: SMASH.inc</label>
			</footer><!-- Fin FOOTER -->
			<?PHP
			   }
			   else
			   {
				  header('Location: Login.php');
			   }
			?>
		</body>
</html>