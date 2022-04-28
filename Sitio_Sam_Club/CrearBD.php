<html>
<head>
	<title>Sam Club</title>
	<link rel="stylesheet" type="text/css" href="estilos/estiloIndex.css" />
</head>
<body>
	<header><!-- Inicio HEADER -->
		<a href="index.html"><img src="images/logo2.jpg" id="imagen" href="index.html"></a>
		<br>
		<h1><label for "Encabezado">La Tienda del Hombre</label></h1>
	</header><!-- Fin HEADER -->
	<aside id="asideMenu"><!-- Inicio ASIDE -->
		<ul>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="quienessomos.html">¿Qui&eacutenes somos?</a></li>
			<li><a href="queofrecemos.html">¿Qu&eacute ofrecemos?</a></li>
			<li><a href="Contactanos.html">Cont&aacutectanos</a></li>
			<li><a href="MiEstilo.html">Mi estilo</a></li>
			<li><a href="Login.php">Iniciar Sesión</a></li>
			<li><a href="CrearBD.php">Crear Base de Datos</a></li>
		</ul>
	</aside><!-- Fin ASIDE -->
	<section id="sectionP"><!-- Inicio SECTION -->
		<article id="encabezadoIMG">
			<img src="images/Tienda1.jpg" id="imgT1">
			<img src="images/Tienda2.jpg" id="imgT2">
			<img src="images/Tienda3.jpg" id="imgT3">
			<img src="images/Tienda4.jpg" id="imgT4">
		</article>
		<article id="encabezadoTabla">
			<h1><label for "EncabezadoTabla">Base de Datos</label></h1>
		</article>
		<article id="artTodo">
				<?php
					//Estableciendo conexioncon el motor de BD
					//$Conectado=mysql_connect("localhost","root","");
					$Conectado=mysqli_connect("localhost","root","");
					
					//Creando la consulta para crear una BD si es que no existe
					$Consulta="DROP DATABASE IF EXISTS SamsClub;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creando la consulta para crear una BD si es que no existe
					$Consulta="CREATE DATABASE IF NOT EXISTS SamsClub;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Seleccionamos la BD recien creada
					//mysql_select_db("BD_alumno", $Conectado);
					mysqli_select_db($Conectado, "SamsClub");
						
					//Si la tabla existe se elimina de la BD - PROVEEDORES
					$Consulta="DROP TABLE IF EXISTS PROVEEDORES;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creamos la estructura de la tabla - PROVEEDORES
					$Consulta="CREATE TABLE PROVEEDORES(IdProveedor INT AUTO_INCREMENT PRIMARY KEY,Nombre VARCHAR(50),RazonSocial VARCHAR(50),Direccion VARCHAR(150),Telefono VARCHAR(10),Correo VARCHAR(50))ENGINE = INNODB;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Si la tabla existe se elimina de la BD - PRODUCTOS
					$Consulta="DROP TABLE IF EXISTS PRODUCTOS;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creamos la estructura de la tabla - PRODUCTOS
					$Consulta="CREATE TABLE PRODUCTOS(IdProducto INT AUTO_INCREMENT PRIMARY KEY,Imagen VARCHAR(100),Codigo VARCHAR(25),SKU VARCHAR(25), idProveedor INT,Costo FLOAT,Titulo VARCHAR(30),Cantidad INT(200),IdTipoProducto INT,Tallas INT,Color VARCHAR(50), estado INT)ENGINE = INNODB;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Si la tabla existe se elimina de la BD - VENTAS
					$Consulta="DROP TABLE IF EXISTS VENTAS;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creamos la estructura de la tabla - VENTAS
					$Consulta="CREATE TABLE VENTAS(IdVenta INT AUTO_INCREMENT PRIMARY KEY,total FLOAT)ENGINE = INNODB;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Si la tabla existe se elimina de la BD - PRODUCTO_PROVEEDOR
					$Consulta="DROP TABLE IF EXISTS PRODUCTO_PROVEEDOR;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creamos la estructura de la tabla - PRODUCTO_PROVEEDOR
					$Consulta="CREATE TABLE PRODUCTO_PROVEEDOR(IdProveedor INT,IdProducto INT,PRIMARY KEY(`IdProveedor`, `IdProducto`))ENGINE = INNODB ;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Si la tabla existe se elimina de la BD - TIPOPRODUCTO
					$Consulta="DROP TABLE IF EXISTS TIPOPRODUCTO;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creamos la estructura de la tabla - TIPOPRODUCTO
					$Consulta="CREATE TABLE TIPOPRODUCTO(IdTipoProducto INT AUTO_INCREMENT PRIMARY KEY,TipoProducto VARCHAR(50))ENGINE = INNODB;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Si la tabla existe se elimina de la BD - VENTAS_USUARIOS
					$Consulta="DROP TABLE IF EXISTS VENTAS_USUARIOS;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creamos la estructura de la tabla - VENTAS_USUARIOS
					$Consulta="CREATE TABLE VENTAS_USUARIOS(IdVenta INT,IdUsuario INT,PRIMARY KEY(`IdVenta`, `IdUsuario`))ENGINE = INNODB;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Si la tabla existe se elimina de la BD - DEVOLVERPRODUCTO
					$Consulta="DROP TABLE IF EXISTS DEVOLVERPRODUCTO;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creamos la estructura de la tabla - DEVOLVERPRODUCTO
					$Consulta="CREATE TABLE DEVOLVERPRODUCTO(IdDevolverP INT AUTO_INCREMENT PRIMARY KEY,IdVenta INT,Producto VARCHAR(150),Razon VARCHAR(250))ENGINE = INNODB;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Si la tabla existe se elimina de la BD - DETALLEVENTA
					$Consulta="DROP TABLE IF EXISTS DETALLEVENTA;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creamos la estructura de la tabla - DETALLEVENTA
					$Consulta="CREATE TABLE DETALLEVENTA(IdDetalle INT AUTO_INCREMENT PRIMARY KEY,IdVenta INT,IdProducto INT,Precio FLOAT,Cantidad INT(50),SubTotal FLOAT)ENGINE = INNODB;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Si la tabla existe se elimina de la BD - USUARIOS
					$Consulta="DROP TABLE IF EXISTS USUARIOS;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creamos la estructura de la tabla - USUARIOS
					$Consulta="CREATE TABLE USUARIOS(IdUsuario INT AUTO_INCREMENT PRIMARY KEY,Usuario VARCHAR(50),Nombres VARCHAR(50),Apellidos VARCHAR(50),Correo VARCHAR(50),Contrasena VARCHAR(30),Nivel INT,Direccion VARCHAR(100),telefono VARCHAR(20), estadoU int)ENGINE = INNODB;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Si la tabla existe se elimina de la BD - NIVELES
					$Consulta="DROP TABLE IF EXISTS NIVELES;";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Creamos la estructura de la tabla - NIVELES
					$Consulta="CREATE TABLE NIVELES(IdNivel INT AUTO_INCREMENT PRIMARY KEY,Nivel VARCHAR(25))ENGINE = INNODB";
					//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//CREAMOS LAS RELACIONES
					$Consulta="ALTER TABLE PRODUCTO_PROVEEDOR ADD CONSTRAINT FK_IDPROVEEDOR FOREIGN KEY(IdProveedor) REFERENCES PROVEEDORES(IdProveedor) ON DELETE CASCADE ON UPDATE CASCADE;";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					$Consulta="ALTER TABLE PRODUCTO_PROVEEDOR ADD CONSTRAINT FK_PRODUCTOS FOREIGN KEY(IdProducto) REFERENCES PRODUCTOS(IdProducto) ON DELETE CASCADE ON UPDATE CASCADE;";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					$Consulta="ALTER TABLE PRODUCTOS ADD CONSTRAINT FK_IdTipoProducto FOREIGN KEY(IdTipoProducto) REFERENCES TIPOPRODUCTO(IdTipoProducto) ON DELETE CASCADE ON UPDATE CASCADE;";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					$Consulta="ALTER TABLE VENTAS_USUARIOS ADD CONSTRAINT FK_VENTAS_USUARIOS FOREIGN KEY(IdVenta) REFERENCES VENTAS(IdVenta) ON DELETE CASCADE ON UPDATE CASCADE;";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					$Consulta="ALTER TABLE DEVOLVERPRODUCTO ADD CONSTRAINT FK_DEVOLVERPRODUCTO FOREIGN KEY(IdVenta) REFERENCES VENTAS(IdVenta) ON DELETE CASCADE ON UPDATE CASCADE;";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					$Consulta="ALTER TABLE DETALLEVENTA ADD CONSTRAINT FK_DETALLEVENTA FOREIGN KEY(IdVenta) REFERENCES VENTAS(IdVenta) ON DELETE CASCADE ON UPDATE CASCADE;";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					$Consulta="ALTER TABLE VENTAS_USUARIOS ADD CONSTRAINT FK_USUARIOS FOREIGN KEY(IdUsuario) REFERENCES USUARIOS(IdUsuario); ON DELETE CASCADE ON UPDATE CASCADE";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					$Consulta="ALTER TABLE DETALLEVENTA ADD CONSTRAINT FK_IDPRODUCTO_DETALLEVENTA FOREIGN KEY(IdProducto) REFERENCES PRODUCTOS(IdProducto) ON DELETE CASCADE ON UPDATE CASCADE;";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					$Consulta="ALTER TABLE DETALLEVENTA ADD CONSTRAINT FK_VENTAS_DETALLEVENTA FOREIGN KEY(IdVenta) REFERENCES VENTAS(IdVenta) ON DELETE CASCADE ON UPDATE CASCADE;";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					$Consulta="ALTER TABLE USUARIOS ADD CONSTRAINT FK_NIVEL_USUARIO FOREIGN KEY(Nivel) REFERENCES NIVELES(IdNivel) ON DELETE CASCADE ON UPDATE CASCADE;";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Establecer el charset
					mysqli_set_charset($Conectado, "utf8");
					
					//Inserción de Registros - NIVELES
					$Consulta="INSERT INTO NIVELES(Nivel) VALUES ('Administrador');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO NIVELES(Nivel) VALUES ('Empleado');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO NIVELES(Nivel) VALUES ('Cliente');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Inserción de Registros - USUARIOS
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('LF','Luis Fernando','Guzman Herrea','fernandoguz@gmail.com','fernando123',1,'Colonia Zacamil pasaje 3','3214-2123', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('MN','Mario Neftaly','Campos Marroquin','mariocam@gmail.com','mario123',3,'Calle motocros casa 125','2345-2345', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('AA','Amilton Abrham','Rodríguez Sigüenza','amilton@gmail.com','amilton123',1,'Calle hacia el volcan edificio 420','5362-7362', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('JM','Johana Marisol','Manrique Caceres','marisolcaceres@gmail.com','marisol123',2,'Colonia Zacamil edinifio 404','2345-5127', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('HA','Hugo Alexander','Rodríguez Cruz','hugoalex@gmail.com','hugo123',1,'calle la achadura pasaje 3','3524-6352', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('FD','Frededick Douglas','Herrera Garcia','douglasgar@gmail.com','douglas123',3,'Colonia Zacamil pasaje 3','6575-9583', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('RM','Rosa Melia','Juarez Henriquez','rosajuares@gmail.com','rosa123',2,'Colonia San Benito pasaje 12','8574-8347', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('ME','Marlon Eduardo','Guardado Portillo','marlonedu@gmail.com','marlon123',1,'mejicanos casa 20','3526-8372', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('NR','Nelson Rosales','Menjivar Salazar','nelsonmenjivar@gmail.com','nelson123',2,'Colonia San Juan casa 305','4352-6372', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('SE','Samuel Enrique','Hernández Campos','samuel@gmail.com','samuel123',1,'Calle san antonio Abad casa 33','3526-6372', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('BS','Bladimir Stanley','Palma Portillo','bladimir@gmail.com','bladimir123',1,'Calle san antonio Abad casa 35','3652-6352', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('NEE','Nelson ernesto','Campos Marroquin','nelsoncam@gmail.com','nelson23',3,'Calle motocros casa 125','2345-2365', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO USUARIOS(Usuario,Nombres, Apellidos, Correo, Contrasena, Nivel, Direccion, telefono, estadoU) VALUES ('JE','Juan Ernesto','Campos Campos','ernesto@gmail.com','ernesto23',3,'Calle motocros casa 15','2312-2345', 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					
					//Inserción de Registros - PROVEEDORES
					$Consulta="INSERT INTO PROVEEDORES(Nombre, RazonSocial, Direccion, Telefono, Correo) VALUES('Sandro Paris','The Company','COURCELLES 2124 RUE DE COURCELLES PARIS Francia','1263-8463','SandroParis@gmail.com');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PROVEEDORES(Nombre, RazonSocial, Direccion, Telefono, Correo) VALUES('Hugo Boss','IBERICA SOCIEDAD COLECTIVA','C/ribiera Del Loira, 8-10, 1 Planta  28042  - Madrid','5364-4372','HugoBoss@gmail.com');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PROVEEDORES(Nombre, RazonSocial, Direccion, Telefono, Correo) VALUES('Paul Smith','The Company','Multiplaza Pacific Mall,, Panamá','3524-8734','PaulSmith@gmail.com');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PROVEEDORES(Nombre, RazonSocial, Direccion, Telefono, Correo) VALUES('Farrutx','CAP FARRUTX SA','Calle de Claudio Coello, 22, 28001 Madrid, España','2534-6374','Ferrutx@gmail.com');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PROVEEDORES(Nombre, RazonSocial, Direccion, Telefono, Correo) VALUES('BROOKS BROTHERS','BROOKS BROTHERS SPAIN SL','Cl Juan Ramon Jimenez, 3  28232  - (Las Rozas) - Madrid', '5362-7356', 'BrooksBrothers@gmail.com');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PROVEEDORES(Nombre, RazonSocial, Direccion, Telefono, Correo) VALUES('Acne Studios','The Company','Norrmalmstorg 2, 111 46 Stockholm, Suecia','6453-9473','AcneStudios@gmail.com');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PROVEEDORES(Nombre, RazonSocial, Direccion, Telefono, Correo) VALUES('POLO RALPH LAUREN','The Company','11401 NW 12th St Space L-100, Miami, FL 33172, EE. UU.','6453-8473','ralphLauren@gmail.com');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PROVEEDORES(Nombre, RazonSocial, Direccion, Telefono, Correo) VALUES('Lacoste','The Company','CC Multiplaza, Nivel 1, Local B-69, San Salvador','6354-8364','Lacoste@gmail.com');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PROVEEDORES(Nombre, RazonSocial, Direccion, Telefono, Correo) VALUES('ALLSAINTS','The Company','Av Ejército Nacional 843, Granada, 11520 Ciudad de México, CDMX, México','6352-7382','AllSaints@gmail.com');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PROVEEDORES(Nombre, RazonSocial, Direccion, Telefono, Correo) VALUES('River Island','The Company','Unit 28, Liverpool Shopping Park, Montrose Way, Liverpool L13 1AF, Reino Unido','6473-8473','RiverIsland@gmail.com');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Inserción de Registros - TIPOPRODUCTO
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Camisa');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Pantalon');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Zapato');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Calcetin');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Chamarra');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Camiseta');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Sueter');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Boxer');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Jean');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Buzo');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO TIPOPRODUCTO(TipoProducto) VALUES('Bermuda');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Inserción de Registros - PRODUCTOS
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','CAMISA 001','',80.00,'Camisa Lacoste',12,1,38,'Rojo',1, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','CAMISA 002','',95.00,'Camisa Lacoste',10,1,40,'Azul',2, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Bemuda 001','',135.00,'Bemudas Lacoste',10,11,39,'Azul',2, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Bemuda 002','',145.00,'Bemudas Lacoste',5,11,40,'Negro',3, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Bemuda 003','',135.00,'Bemudas Lacoste',15,11,38,'Blanco',1, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Pantalon 001','',145.00,'Pantalon Hugo Boss',15,2,38,'Gris', 2, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Pantalon 002','',145.00,'Pantalon Hugo Boss',10,2,38,'Azul',2, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Pantalon 003','',145.00,'Pantalon Hugo Boss',15,2,40,'Negro',2, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Jean 001','',125.00,'Jean Paul Smith',10,9,39,'Azul',3, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Jean 002','',125.00,'Jean Paul Smith',5,9,42,'Negro',3, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Camiseta 001','',100.00,'Camiseta AllSaints',15,6,38,'Azul', 3, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Camiseta 002','',100.00,'Camiseta AllSaints',25,6,38,'Blanca', 3, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Camiseta 003','',100.00,'Camiseta Polo Ralph Lauren',10,6,38,'Azul', 4, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTOS(Imagen, Codigo, SKU, Costo, Titulo, Cantidad, IdTipoProducto, Tallas, Color, idProveedor, estado) VALUES('','Camiseta 004','',120.00,'Camiseta Polo Ralph Lauren',30,6,40,'Negro', 5, 1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Inserción de Registros - VENTAS
					$Consulta="INSERT INTO VENTAS(total) VALUES(215.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS(total) VALUES(180.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS(total) VALUES(200.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS(total) VALUES(280.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS(total) VALUES(240.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS(total) VALUES(370.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS(total) VALUES(245.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS(total) VALUES(385.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS(total) VALUES(290.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS(total) VALUES(225.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Inserción de Registros - DETALLEVENTA
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(1,1,80.00,1,80.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(1,3,135.00,1,135.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(2,1,80.00,1,80.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(2,11,100.00,1,100.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(3,12,100,2,200.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(4,1,80.00,1,80.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(4,12,100.00,2,200.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(5,14,120.00,2,240.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(6,3,135.00,2,270.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(6,11,100.00,1,100.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(7,7,145.00,1,145.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(7,12,100.00,1,100.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(8,8,145.00,1,145.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(8,14,120.00,2,240.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(9,2,90.00,1,90.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(9,11,100.00,2,200.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(10,9,125.00,1,125.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DETALLEVENTA(IdVenta, IdProducto, Precio, Cantidad, SubTotal) VALUES(10,12,100.00,1,100.00);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					
					//Inserción de Registros - DEVOLVERPRODUCTO
					$Consulta="INSERT INTO DEVOLVERPRODUCTO(IdVenta, Producto, Razon) VALUES(1,'Bemuda 001','Manga rota');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DEVOLVERPRODUCTO(IdVenta, Producto, Razon) VALUES(2,'CAMISA 001','Malgaste de color');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DEVOLVERPRODUCTO(IdVenta, Producto, Razon) VALUES(3,'CAMISA 001','Manga rota');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DEVOLVERPRODUCTO(IdVenta, Producto, Razon) VALUES(4,'Camiseta 002','Talla equivocada');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DEVOLVERPRODUCTO(IdVenta, Producto, Razon) VALUES(5,'Camiseta 004','Talla equivocada');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DEVOLVERPRODUCTO(IdVenta, Producto, Razon) VALUES(6,'Camiseta 001','Color equivocado');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DEVOLVERPRODUCTO(IdVenta, Producto, Razon) VALUES(7,'Pantalon 002','Talla equivocada');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DEVOLVERPRODUCTO(IdVenta, Producto, Razon) VALUES(8,'Pantalon 003','Mal estado de la tela');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DEVOLVERPRODUCTO(IdVenta, Producto, Razon) VALUES(9,'CAMISA 002','Mal estado de la tela');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO DEVOLVERPRODUCTO(IdVenta, Producto, Razon) VALUES(10,'Camiseta 002','Manga rota');";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					
					//Inserción de Registros - PRODUCTO_PROVEEDOR
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(8,1);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(8,2);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(8,3);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(8,4);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(8,5);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(2,6);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(2,7);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(2,8);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(3,9);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(3,10);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(9,11);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(9,12);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(7,13);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO PRODUCTO_PROVEEDOR(IdProveedor, IdProducto) VALUES(7,14);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Inserción de Registros - VENTAS_USUARIOS
					$Consulta="INSERT INTO VENTAS_USUARIOS(IdVenta, IdUsuario) VALUES(1,2);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS_USUARIOS(IdVenta, IdUsuario) VALUES(2,12);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS_USUARIOS(IdVenta, IdUsuario) VALUES(3,6);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS_USUARIOS(IdVenta, IdUsuario) VALUES(4,13);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS_USUARIOS(IdVenta, IdUsuario) VALUES(5,2);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS_USUARIOS(IdVenta, IdUsuario) VALUES(6,6);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS_USUARIOS(IdVenta, IdUsuario) VALUES(7,12);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS_USUARIOS(IdVenta, IdUsuario) VALUES(8,2);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS_USUARIOS(IdVenta, IdUsuario) VALUES(9,13);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					$Consulta="INSERT INTO VENTAS_USUARIOS(IdVenta, IdUsuario) VALUES(10,6);";
					$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
					
					//Verificando si la BD se creo.
					if($EjecutarConsulta)
					{
						echo ("<label for \"contenido\" id=\"txtContenido1\">La Base de Datos, las tablas y sus registros fueron creados de forma satisfactoria.</label><br>");
					}
					else
					{
						echo("Surgio problema para crear la BD.<br>");
						echo("El problema es: <br>");
						//echo("Codigo de error: <b>".mysql_errno()."</b><br>");
						echo("Codigo de error: <b>".mysqli_errno($Conectado)."</b><br>");
					}
					
					//liberando recursos y cerrando la BD;
					//@mysql_free_result($EjecutarConsulta);
					@mysqli_free_result($EjecutarConsulta);
					//mysql_close($Conectado);
					mysqli_close($Conectado);
				?>
		</article>
	</section><!-- Fin SECTION -->
	<footer><!-- Inicio FOOTER -->
		<label for "Pie" id="txtPie">Creado por: SMASH.inc</label>
	</footer><!-- Fin FOOTER -->
</body>
</html>