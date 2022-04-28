function validarCarro()
{
  var cant = parseInt(document.FrmRegistro.num.value);
  if(cant)
  {
    alert("Se ha enviado");
  }
  else {
    alert("Digite cantidad");
    document.FrmRegistro.num.focus();
  }
}
