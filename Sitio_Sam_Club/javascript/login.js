function validarUsuario()
{
	var txtUsuario, txtClave;
	txtUsuario = document.getElementById('usuario').value;
	txtClave = document.getElementById('pass').value;
			
	if(txtUsuario === "")
	{
		alert("Debes ingresar tu usuario");
		document.getElementById('usuario').focus();
		return false;
		
	}
	else if(txtClave === "")
	{
		alert("Debes ingresar tu contraseña");
		document.getElementById('pass').focus();
		return false;
	}
	else
	{
		return true;
	}
}