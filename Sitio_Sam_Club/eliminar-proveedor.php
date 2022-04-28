<?php
	session_start();
	
  error_reporting(0);
  if(isset($_SESSION["usuario1_valido"]))
	{
	  $conexion = mysqli_connect("localhost","root","","samsclub");
	  //Establecer el charset
		mysqli_set_charset($Conectado, "utf8");
	  if(isset($_REQUEST['btnEliminar']))
	  {
		$prov = $_POST['Cod_prov'];
		$elim = "DELETE FROM producto_proveedor where IdProveedor = $prov";
		$con1 = mysqli_query($conexion,$elim);
		$elim2 = "DELETE FROM proveedores where IdProveedor = $prov";
		$con1 = mysqli_query($conexion,$elim2);
		if(mysqli_affected_rows($conexion) > 0)
		{
		  echo "<script>alert('Proveedor eliminado exitosamente.');</script>";
		}
		else {
		  echo "<script>alert('No se ha encontrado el proveedor.');</script>";
		}
	  }
?>
<html>
	<head><title> Eliminar Proveedor </title>
		<link rel="stylesheet" type="text/css" href="estilos/estilo_Abastecimiento.css"/>
		<script language="javascript" src=""></script>

	</head>

	<body>

	<section class="Principal">

	<form name= "frmEliminar" action="eliminar-proveedor.php" method="POST" >

		<center><h2>Eliminar proveedor</h2></center>

		<table border="1" style="margin-bottom: 50">
      <?php
        $cn = "SELECT * from proveedores";
        $quer = mysqli_query($conexion,$cn);
        if(mysqli_num_rows($quer) > 0)
        {
       ?>
			<tr>
        <td>
          Id
        </td>
				<td>
          Proveedor
        </td>
        <td>
          Razon Social
        </td>
      </tr>
      <?php foreach ($quer as $quer) { ?>
      <tr>
        <td>
          <?php echo $quer['IdProveedor'] ?>
        </td>
        <td>
          <?php
              echo $quer['Nombre'];
           ?>
        </td>
        <td><?php
            echo $quer['RazonSocial'];

         }?></td>
      </tr>
    <?php } ?>
  </table>
  
     <label> Ingrese ID del proveedor:</label> <input type="text" name="Cod_prov" size="40"><br><br>
	 <center><input type="submit" name="btnEliminar" value="Eliminar">
	 <a href="menuNivel1.php">Regresar</a></center>
	</form>
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