function validarR()
{
	var txtCorreo;
	txtCorreo = document.getElementById('correo').value;
			
	if(txtCorreo === "")
	{
		alert("Debes ingresar tu correo electrónico");
		document.getElementById('correo').focus();
		return false;
	}
	else
	{
		return true;
	}
}