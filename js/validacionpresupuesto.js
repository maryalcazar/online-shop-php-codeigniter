function limpia(){
		var mensajes =document.getElementsByClassName("error");
		
		for (var i=0; i<mensajes.length; i++){
			mensajes[i].innerHTML="";
			}
	
	}
	
	//comprobar que no haya un campo vacío
	 function escribirmensaje(id, mensaje){
		document.getElementById(id).innerHTML = mensaje;
	}
	function campovacio(texto, idcampo){
		if (texto==null||texto.length==0){
			escribirmensaje('error'+ idcampo, "El campo no puede estar vacio");
			document.getElementById(idcampo).focus();
			return false
		}
		return true
	}
	

	function validacion1() {
		limpia();
        vnombre = document.getElementById("nombre").value;
		vmarca = document.getElementById("marca").value;
		

		if(!campovacio(vnombre, 'nombre' )) return false;
		if(!campovacio(vmarca, 'marca' )) return false;
		
		
			email = document.getElementById("email").value;
			if (!validaEmail(email)){
			document.getElementById("erroremail").innerHTML = "no has introducido un email valido";
			document.getElementById('email').focus();
			return false;
			
			}
			telf = document.getElementById("tlf").value;
			if (!validarTelefono(telf)) {
			document.getElementById("errortelefono").innerHTML = "no has introducido un teléfono valido";
			document.getElementById('tlf').focus();
			return false;
			
			}
			
			return true;
		}
		
		function validaEmail(email) {
			var patron = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!(patron.test(email))) {
				return false;
			}
			return true;
			
		}
		
		function validarTelefono(telefono) {
			var patron = /^\d{9}$/;
			if (!(patron.test(telefono))) {
				return false;
			}
			return true;
		}
