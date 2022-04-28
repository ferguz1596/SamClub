// JavaScript Document<script type="text/javascript">
function disableCheck(field, causer) {
if (causer.checked) {
field.checked = false;
field.disabled = true;
}
else {
field.disabled = false;
}
}

//Solo Camisas
function disableOthers(field) {
disableCheck(frmAbastecimiento.tipoRopa2, field);
disableCheck(frmAbastecimiento.tipoRopa3, field);
disableCheck(frmAbastecimiento.tipoRopa4, field);
disableCheck(frmAbastecimiento.pantalon1, field);
disableCheck(frmAbastecimiento.pantalon2, field);
disableCheck(frmAbastecimiento.pantalon3, field);
disableCheck(frmAbastecimiento.pantalon4, field);
disableCheck(frmAbastecimiento.pantalon5, field);
}
		//Tallas 
		function disableOthersA(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas2, field);
			disableCheck(frmAbastecimiento.camisas3, field);
			disableCheck(frmAbastecimiento.camisas4, field);
			disableCheck(frmAbastecimiento.camisas5, field);
			disableCheck(frmAbastecimiento.camisas6, field);
		}
			function disableOthersB(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas3, field);
			disableCheck(frmAbastecimiento.camisas4, field);
			disableCheck(frmAbastecimiento.camisas5, field);
			disableCheck(frmAbastecimiento.camisas6, field);



		}
			function disableOthersC(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas2, field);
			disableCheck(frmAbastecimiento.camisas4, field);
			disableCheck(frmAbastecimiento.camisas5, field);
			disableCheck(frmAbastecimiento.camisas6, field);
		}
			function disableOthersD(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas2, field);
			disableCheck(frmAbastecimiento.camisas3, field);
			disableCheck(frmAbastecimiento.camisas5, field);
			disableCheck(frmAbastecimiento.camisas6, field);
		}
			function disableOthersE(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas2, field);
			disableCheck(frmAbastecimiento.camisas3, field);
			disableCheck(frmAbastecimiento.camisas4, field);
			disableCheck(frmAbastecimiento.camisas6, field);
		}
				function disableOthersF(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.camisas2, field);
			disableCheck(frmAbastecimiento.camisas3, field);
			disableCheck(frmAbastecimiento.camisas4, field);
			disableCheck(frmAbastecimiento.camisas5, field);
		}

//Solo Pantalones
function disableOthers2(field) {
disableCheck(frmAbastecimiento.tipoRopa1, field);
disableCheck(frmAbastecimiento.tipoRopa3, field);
disableCheck(frmAbastecimiento.tipoRopa4, field);
disableCheck(frmAbastecimiento.camisas1, field);
disableCheck(frmAbastecimiento.camisas2, field);
disableCheck(frmAbastecimiento.camisas3, field);
disableCheck(frmAbastecimiento.camisas4, field);
disableCheck(frmAbastecimiento.camisas5, field);
disableCheck(frmAbastecimiento.camisas6, field);
}

		function disableOthersG(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.pantalon2, field);
			disableCheck(frmAbastecimiento.pantalon3, field);
			disableCheck(frmAbastecimiento.pantalon4, field);
			disableCheck(frmAbastecimiento.pantalon5, field);
			
		}
			function disableOthersH(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.pantalon1, field);
			disableCheck(frmAbastecimiento.pantalon3, field);
			disableCheck(frmAbastecimiento.pantalon4, field);
			disableCheck(frmAbastecimiento.pantalon5, field);
			
		}
			function disableOthersI(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.pantalon1, field);
			disableCheck(frmAbastecimiento.pantalon2, field);
			disableCheck(frmAbastecimiento.pantalon4, field);
			disableCheck(frmAbastecimiento.pantalon5, field);
		
		}
			function disableOthersJ(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.pantalon1, field);
			disableCheck(frmAbastecimiento.pantalon2, field);
			disableCheck(frmAbastecimiento.pantalon3, field);
			disableCheck(frmAbastecimiento.pantalon5, field);
		
			
				}
			function disableOthersK(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
				disableCheck(frmAbastecimiento.pantalon1, field);
			disableCheck(frmAbastecimiento.pantalon2, field);
			disableCheck(frmAbastecimiento.pantalon3, field);
			disableCheck(frmAbastecimiento.pantalon4, field);
			
		}

//solo Chaquetas
function disableOthers3(field) {
disableCheck(frmAbastecimiento.tipoRopa1, field);
disableCheck(frmAbastecimiento.tipoRopa2, field);
disableCheck(frmAbastecimiento.tipoRopa4, field);
disableCheck(frmAbastecimiento.pantalon1, field);
disableCheck(frmAbastecimiento.pantalon2, field);
disableCheck(frmAbastecimiento.pantalon3, field);
disableCheck(frmAbastecimiento.pantalon4, field);
disableCheck(frmAbastecimiento.pantalon5, field);
disableCheck(frmAbastecimiento.estilo1, field);
disableCheck(frmAbastecimiento.estilo2, field);
disableCheck(frmAbastecimiento.estilo3, field);
disableCheck(frmAbastecimiento.estilo4, field);
}



//Solo Calcetines
	function disableOthers4(field) {
disableCheck(frmAbastecimiento.tipoRopa1, field);
disableCheck(frmAbastecimiento.tipoRopa2, field);
disableCheck(frmAbastecimiento.tipoRopa3, field);
disableCheck(frmAbastecimiento.pantalon1, field);
disableCheck(frmAbastecimiento.pantalon2, field);
disableCheck(frmAbastecimiento.pantalon3, field);
disableCheck(frmAbastecimiento.pantalon4, field);
disableCheck(frmAbastecimiento.pantalon5, field);
disableCheck(frmAbastecimiento.estilo1, field);
disableCheck(frmAbastecimiento.estilo2, field);
disableCheck(frmAbastecimiento.estilo3, field);
disableCheck(frmAbastecimiento.estilo4, field);
disableCheck(frmAbastecimiento.camisas1, field);
disableCheck(frmAbastecimiento.camisas2, field);
disableCheck(frmAbastecimiento.camisas3, field);
disableCheck(frmAbastecimiento.camisas4, field);
disableCheck(frmAbastecimiento.camisas5, field);
disableCheck(frmAbastecimiento.camisas6, field);

}

function disableOthersL(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.estilo2, field);
			disableCheck(frmAbastecimiento.estilo3, field);
			disableCheck(frmAbastecimiento.estilo4, field);
		
			
		}
			function disableOthersO(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.estilo1, field);
			disableCheck(frmAbastecimiento.estilo3, field);
			disableCheck(frmAbastecimiento.estilo4, field);
			
		}
			function disableOthersP(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.estilo1, field);
			disableCheck(frmAbastecimiento.estilo2, field);
			disableCheck(frmAbastecimiento.estilo4, field);
		
		}
			function disableOthersQ(field) {
			//disableCheck(frmAbastecimiento.camisas1, field);
			disableCheck(frmAbastecimiento.estilo1, field);
			disableCheck(frmAbastecimiento.estilo2, field);
			disableCheck(frmAbastecimiento.estilo3, field);
		
			
		}

		function ValidarAb()
			{
	 			var elemento = document.forms["frmAbastecimiento"]["tipoRopa1"].checked;
	 			var elemento1 = document.forms["frmAbastecimiento"]["tipoRopa2"].checked;
	 			var elemento2 = document.forms["frmAbastecimiento"]["tipoRopa3"].checked;
	 			var elemento3 = document.forms["frmAbastecimiento"]["tipoRopa4"].checked;
	 
	 
	 				if(elemento == true || elemento1== true || elemento2== true || elemento3 == true){
	 				//alert("El Elemento ha sido seleccionado");
	 					return false;
	 				}
				
	 
	 				else{
	 					alert("Falta Seleccionar algunos elementos");
	 					return false;
	 				}
					
					var codPro = document.forms["frmAbastecimiento"]["Cod_Producto"].value;
					alert(codPro);	
					
			}
			