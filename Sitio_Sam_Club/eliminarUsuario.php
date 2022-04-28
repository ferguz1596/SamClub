<?php
  session_start();
	
	error_reporting(E_ALL ^ E_NOTICE);
	
	if(isset($_SESSION["usuario1_valido"]))
	{
		$conexion = mysqli_connect("localhost","root","","samsclub");
		if(isset($_REQUEST['btnEliminar']))
		{
		  mysqli_set_charset($conexion, "utf8");
		  $usuario = $_POST['Cod_us'];
		  if($usuario)
		  {
			$buscar = "SELECT * from usuarios where Usuario = '$usuario'";

			//$elim = "DELETE from usuarios where Usuario = '$usuario'";
			$res = mysqli_query($conexion,$buscar);
			if(mysqli_num_rows($res) > 0)
			{
			  /*foreach ($res as $res){
				echo $res['IdUsuario'];
				$idEl = $res['IdUsuario'];
			  }*/
				$eliminar = "UPDATE usuarios set estadoU = 2 where Usuario = '$usuario'";
				$res2 = mysqli_query($conexion,$eliminar);
				if($res2)
				{
				  echo "<script>alert('Usuario eliminado exitosamente.');</script>";
				}
				else {
				  echo "<script>alert('No se ha eliminado el usuario.');</script>";
				}
				/*$eliminar = "DELETE from ventas_usuarios where IdUsuario = '$idEl'";
				$res2 = mysqli_query($conexion,$eliminar);
				$eliminar2 = "DELETE from usuarios where IdUsuario = '$idEl'";
				$res3 = mysqli_query($conexion,$eliminar2);*/
				//echo "<script>alert('Usuarios eliminado exitosamente.');</script>";
			  }
			  else
			  {
				/*$eliminar3 = "DELETE from usuarios where IdUsuario = '$idEl'";
				$res4 = mysqli_query($conexion,$eliminar3);*/
				echo "<script>alert('El usuario no existe.');</script>";
			  }

			}/*
			  while ( $fila = $res->fetch_assoc() ) {
				echo $fila["IdUsuario"];
			  }*/
			  else
			  {
				echo "<script>alert('No ha ingresado usuario a eliminar.');</script>";
			  }
		  }
?>

<html>
	<head><title> Eliminar Usuario </title>
		<link rel="stylesheet" type="text/css" href="estilos/estilo_Abastecimiento.css"/>
		<script language="javascript" src=""></script>

	</head>

	<body>

	<section class="Principal">

	<form name= "frmEliminar" action="eliminarUsuario.php" method="POST" >

		<center><h2>Eliminar usuario</h2></center>

		<table

			<tr>
				<td><center>
				<label> Ingrese usuario a eliminar: <input type="text" name="Cod_us" size="40"> <input type="submit" name="btnEliminar" value="Eliminar">
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