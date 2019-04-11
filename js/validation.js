

	//funciones para comprobar que no haya campos vacíos
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
	

	
	
		
		

		
	function validacion2() {
		limpia();
        vnombre = document.getElementById("nombre2").value;
		vmarca = document.getElementById("marca2").value;
		vmodelo = document.getElementById("modelo2").value;

		if(!campovacio(vnombre, 'nombre2' )) return false;
		if(!campovacio(vmarca, 'marca2' )) return false;
		if(!campovacio(vmodelo, 'modelo2' )) return false;
		
			email = document.getElementById("email2").value;
			if (!validaEmail(email)){
			document.getElementById("erroremail2").innerHTML = "no has introducido un email valido";
			document.getElementById('email2').focus();
			return false;
			
			}
			telf = document.getElementById("tlf2").value;
			if (!validarTelefono(telf)) {
			document.getElementById("errortelefono2").innerHTML = "no has introducido un teléfono valido";
			document.getElementById('tlf2').focus();
			return false;
			
			}
			matricula = document.getElementById("matricula2").value;
			if (!validarMatricula(matricula)) {
			document.getElementById("errormatricula2").innerHTML = "no has introducido una matricula valida";
			document.getElementById('matricula2').focus();
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
		
		function validarMatricula(matricula) {
			var patron = /^[A-Z]{1,2}\s\d{4}\s([B-D]|[F-H]|[J-N]|[P-T]|[V-Z]){3}$/;
			if (!(patron.test(matricula))) {
				return false;
			}
			return true;
		}
		
		
		
		
		
		

	
