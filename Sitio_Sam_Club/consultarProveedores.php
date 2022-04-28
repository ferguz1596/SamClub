<?php
	session_start();
	
  error_reporting(0);
  if(isset($_SESSION["usuario1_valido"]) || isset($_SESSION["usuario1_valido"]))
	{
	  $conexion = mysqli_connect("localhost","root","","samsclub");
	  //Establecer el charset
		mysqli_set_charset($Conectado, "utf8");
?>
<html>
	<head><title> Listado de Proveedores </title>
		<link rel="stylesheet" type="text/css" href="estilos/estilo_Abastecimiento.css"/>
		<script language="javascript" src=""></script>

	</head>

	<body>

	<section class="Principal">

	<form name= "frmEliminar" action="eliminar-proveedor.php" method="POST" >

		<center><h2>Listado de Proveedores</h2></center>

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
  <?php
	if(isset($_SESSION["usuario1_valido"]))
	{
  ?>
  <center><a href="menuNivel1.php">Regresar al Menú Principal</a></center>
  <?php
	}
	else if(isset($_SESSION["usuario2_valido"]))
	{
  ?>
	<center><a href="menuNivel2.php">Regresar al Menú Principal</a></center>
	<?php
	}
  ?>
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