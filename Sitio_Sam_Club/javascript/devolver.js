function devolver()
{
	var valId, valProducto, valRazon;
	valId = document.getElementById('txtId').value;
	valProducto = document.getElementById('txtProducto').value;
	valRazon = document.getElementById('txtRazon').value;
	
	if(valId === "")
	{
		alert("Debes ingresar el ID de la factura");
		document.getElementById('txtId').focus();
		return false;
	}
	else if(valProducto === "")
	{
		alert("Debes seleccionar algún producto detallado en la factura");
		document.getElementById('txtProducto').focus();
		return false;
	}
	else if(valRazon === "")
	{
		alert("Debes ingresar la razón por la que se devuelve el producto");
		document.getElementById('txtRazon').focus();
		return false;
	}
	else
	{
		return true;
	}
}