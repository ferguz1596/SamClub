function validarRU()
{
	var txtNombre, txtApellido, txtCorreo, txtContrasena, txtDireccion, txtTel;
	txtNombre = document.getElementById('Nom').value;
	txtApellido = document.getElementById('Ape').value;
	txtCorreo = document.getElementById('Corr').value;
	txtContrasena = document.getElementById('Cn').value;
	txtDireccion = document.getElementById('Direc').value;
	txtTel = document.getElementById('Num').value;
	
	if(txtNombre === "")
	{
		alert("Debes ingresar tus nombres");
		document.getElementById('Nom').focus();
		return false;
	}
	else if(txtApellido === "")
	{
		alert("Debes ingresar tus apellidos");
		document.getElementById('Ape').focus();
		return false;
	}
	else if(txtCorreo === "")
	{
		alert("Debes ingresar tu correo electrónico");
		document.getElementById('Corr').focus();
		return false;
	}
	else if(txtContrasena === "")
	{
		alert("Debes ingresar una contraseña");
		document.getElementById('Cn').focus();
		return false;
	}
	else if(txtDireccion === "")
	{
		alert("Debes ingresar tu dirección");
		document.getElementById('Direc').focus();
		return false;
	}
	else if(txtTel === "")
	{
		alert("Debes ingresar tu número de teléfono");
		document.getElementById('Num').focus();
		return false;
	}
	else
	{
		//alert("Usuario registrado correctamente");
		return true;
	}
}