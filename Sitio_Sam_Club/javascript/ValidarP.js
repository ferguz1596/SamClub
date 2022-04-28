function ValiPro() {
	var idPro = document.forms["frmProv"]["id"].value;
	var nombre = document.forms["frmProv"]["nombre"].value;
	var razon = document.forms["frmProv"]["razon"].value;	
	var direccion = document.forms["frmProv"]["direccion"].value;
	var telefono = document.forms["frmProv"]["telefono"].value;	
	var email = document.forms["frmProv"]["correo"].value;	
	

	if(idPro == "")
	{
		alert("El campo id está vacío");
		document.forms["frmProv"]["id"].focus();
		return false;
	}
	
	else if (nombre == "") 
	{
		alert("El campo nombre está vacío");
		document.forms["frmProv"]["nombre"].focus();
		return false;
	}
	else if (razon == "") 
	{
		alert("La razón está vacía");
		document.forms["frmProv"]["razon"].focus();
		return false;
	}
	else if (direccion == "")
	{
		alert("La dirección está vacía");
		document.forms["frmProv"]["direccion"].focus();
		return false;
	}

	else if (telefono == "")
	{
		alert("El teléfono está vacío");
		document.forms["frmProv"]["telefono"].focus();
		return false;
	}


	else if (email == "")
	{
		alert("El email está vacío");
		document.forms["frmProv"]["correo"].focus();
		return false;
	}
}

	/*function ValidarC() {
	var Cantidad = document.forms["FrmRegistro"]["num"].value;
	
	
	if(Cantidad<=0)
	{
		alert("Debes especificar la cantidad");
		return false;
	}*/

