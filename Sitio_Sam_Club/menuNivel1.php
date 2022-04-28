<?PHP
   session_start ();
?>

<html>
	<head><title>Menú Principal</title>
	<link rel="stylesheet" type="text/css" href="estilos/estiloFormularios.css" />
	<meta charset="utf-8">
	</head>
		<body>
			<?PHP
			   if (isset($_SESSION["usuario1_valido"]))
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
					<li><a href="menuNivel1.php">Inicio</a></li>
					<li><a href="#">Modificar mi cuenta</a></li>
				</ul>
			</aside><!-- Fin ASIDE -->
			<section id="sectionP"><!-- Inicio SECTION -->
				<article id="encabezadoTabla">
					<ul id="menuCentral">
						<table id="tablaMenu">
							<tr>
								<td>
									<center><b>Usuarios</b></center>
								</td>
								<td>
									<center><b>Productos</b></center>
								</td>
								<td>
									<center><b>Proveedores</b></center>
								</td>
							</tr>
							<tr>
								<td>
									<li><a href="RegistrarUsuarioAdmin.php">Registrar Usuarios</a></li>
								</td>
								<td>
									<li><a href="RegistrarProducto.php">Registrar Productos</a></li>
								</td>
								<td>
									<li><a href="proveedores.php">Registrar Proveedores</a></li>
								</td>
							</tr>
							<tr>
								<td>
									<li><a href="eliminarUsuario.php">Eliminar Usuarios</a></li>
								</td>
								<td>
									<li><a href="eliminarProducto.php">Eliminar Productos</a></li>
								</td>
								<td>
									<li><a href="eliminar-proveedor.php">Eliminar Proveedores</a></li>
								</td>
							</tr>
							<tr>
								<td>
									<li><a href="#">Editar Usuarios</a></li>
								</td>
								<td>
									<li><a href="Devolver.php">Devolver Productos</a></li>
								</td>
								<td>
									<li><a href="#">Editar Proveedores</a></li>
								</td>
							</tr>
							<tr>
								<td>
									<li><a href="#">Consultar Usuarios</a></li>
								</td>
								<td>
									<li><a href="consultarProductos.php">Consultar Productos</a></li>
								</td>
								<td>
									<li><a href="consultarProveedores.php">Consultar Proveedores</a></li>
								</td>
							</tr>
							<tr>
								<td>
										
								</td>
								<td>
									<li><a href="Abastecimiento.php">Abastecimiento de Productos</a></li>
								</td>
								<td>
								</td>
							</tr>
						<!--<li><a href="Login.html">Login</a></li> No se muestra acá-->
						<!--<li><a href="RecuperacionContrasena.html">Recuperar Contraseña</a></li> Se muestra en el Login-->
						<!--<li><a href="Carro.html">Carro</a></li> Se muestra al Cliente-->
						<!--<li><a href="FinalizarCompra.html">Finalizar Compra</a></li> Se muestra al Cliente con usuario-->
						<!--<li><a href="MiEstilo.html">Mi estilo</a></li> Se muestra al Cliente sin usuario -->
						</table>
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