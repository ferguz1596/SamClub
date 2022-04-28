<?PHP
   session_start ();
?>
<HTML LANG="es">
<HEAD>
<TITLE>Desconectar</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

</HEAD>
<BODY>

<?PHP
   if (isset($_SESSION["usuario1_valido"]) || isset($_SESSION["usuario2_valido"]) || isset($_SESSION["usuario3_valido"]))
   {
      session_destroy ();
	  
	  header('Location: Login.php');
   }
   else
   {
	   print ("<script>alert('No existe una conexion activa');window.location= 'Login.php'</script>;");
   }
?>

</BODY>
</HTML>