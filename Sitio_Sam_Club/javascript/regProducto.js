function validarRP()
{
	var valTitulo, valCodigo, valCantidad, valSKU, valCosto, valDesc;
	
	valTitulo = document.getElementById('txtTitulo').value;
	valCodigo = document.getElementById('txtCodigo').value;
	valCantidad = document.getElementById('txtCantidad').value;
	valSKU = document.getElementById('txtSKU').value;
	valCosto = document.getElementById('txtCosto').value;
	valDesc = document.getElementById('txtDescripcion').value;
	
	if(valTitulo === "")
	{
		alert("Debes ingresar el título del producto");
		document.getElementById('txtTitulo').focus();
		return false;
	}
	else if(valCodigo === "")
	{
		alert("Debes ingresar el código del producto");
		document.getElementById('txtCodigo').focus();
		return false;
	}
	else if(valCantidad === "" || parseInt(valCantidad) < 1)
	{
		alert("Debes ingresar la cantidad del producto");
		document.getElementById('txtCantidad').focus();
		return false;
		
	}
	else if(valSKU === "")
	{
		alert("Debes ingresar el SKU del producto");
		document.getElementById('txtSKU').focus();
		return false;
	}
	else if(valCosto === "" || parseInt(valCosto) < 1)
	{
		alert("Debes ingresar el costo del producto");
		document.getElementById('txtCosto').focus();
		return false;
	}
	else if(valCosto === "" && valCosto < 1)
	{
		alert("Debes ingresar el costo del producto");
		document.getElementById('txtCosto').focus();
		return false;
	}
	else if(valDesc === "")
	{
		alert("Debes ingresar una descripción del producto");
		document.getElementById('txtDescripcion').focus();
		return false;
	}
	else
	{
		return true;
	}
}

//Checkbox
function disableCheck(field, causer) {
if (causer.checked) {
field.checked = false;
field.disabled = true;
}
else {
field.disabled = false;
}
}

//Colores
function disableOthersA(field) {
	//disableCheck(frmAbastecimiento.camisas1, field);
	disableCheck(Recuperacion.color2, field);
	disableCheck(Recuperacion.color3, field);
	disableCheck(Recuperacion.color4, field);
	disableCheck(Recuperacion.color5, field);	
}
function disableOthersB(field) {
	//disableCheck(frmAbastecimiento.camisas1, field);
	disableCheck(Recuperacion.color1, field);
	disableCheck(Recuperacion.color3, field);
	disableCheck(Recuperacion.color4, field);
	disableCheck(Recuperacion.color5, field);
}
function disableOthersC(field) {
	//disableCheck(frmAbastecimiento.camisas1, field);
	disableCheck(Recuperacion.color1, field);
	disableCheck(Recuperacion.color2, field);
	disableCheck(Recuperacion.color4, field);
	disableCheck(Recuperacion.color5, field);
}
function disableOthersD(field) {
	//disableCheck(frmAbastecimiento.camisas1, field);
	disableCheck(Recuperacion.color1, field);
	disableCheck(Recuperacion.color2, field);
	disableCheck(Recuperacion.color3, field);
	disableCheck(Recuperacion.color5, field);
}
function disableOthersE(field) {
	//disableCheck(frmAbastecimiento.camisas1, field);
	disableCheck(Recuperacion.color1, field);
	disableCheck(Recuperacion.color2, field);
	disableCheck(Recuperacion.color3, field);
	disableCheck(Recuperacion.color4, field);
}

//Tallas
function disableOthersT1(field) {
	disableCheck(Recuperacion.tallas2, field);
	disableCheck(Recuperacion.tallas3, field);
	disableCheck(Recuperacion.tallas4, field);
	disableCheck(Recuperacion.tallas5, field);	
	disableCheck(Recuperacion.tallas6, field);	
}
function disableOthersT2(field) {
	disableCheck(Recuperacion.tallas1, field);
	disableCheck(Recuperacion.tallas3, field);
	disableCheck(Recuperacion.tallas4, field);
	disableCheck(Recuperacion.tallas5, field);	
	disableCheck(Recuperacion.tallas6, field);	
}
function disableOthersT3(field) {
	disableCheck(Recuperacion.tallas1, field);
	disableCheck(Recuperacion.tallas2, field);
	disableCheck(Recuperacion.tallas4, field);
	disableCheck(Recuperacion.tallas5, field);	
	disableCheck(Recuperacion.tallas6, field);	
}
function disableOthersT4(field) {
	disableCheck(Recuperacion.tallas1, field);
	disableCheck(Recuperacion.tallas2, field);
	disableCheck(Recuperacion.tallas3, field);
	disableCheck(Recuperacion.tallas5, field);	
	disableCheck(Recuperacion.tallas6, field);	
}
function disableOthersT5(field) {
	disableCheck(Recuperacion.tallas1, field);
	disableCheck(Recuperacion.tallas2, field);
	disableCheck(Recuperacion.tallas3, field);
	disableCheck(Recuperacion.tallas4, field);	
	disableCheck(Recuperacion.tallas6, field);	
}
function disableOthersT6(field) {
	disableCheck(Recuperacion.tallas1, field);
	disableCheck(Recuperacion.tallas2, field);
	disableCheck(Recuperacion.tallas3, field);
	disableCheck(Recuperacion.tallas4, field);	
	disableCheck(Recuperacion.tallas5, field);	
}