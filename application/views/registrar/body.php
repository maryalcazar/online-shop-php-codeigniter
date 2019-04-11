
<script type="text/javascript">

function limpia(){
		var mensajes =document.getElementsByClassName("error");
		
		for (var i=0; i<mensajes.length; i++){
			mensajes[i].innerHTML="";
			}
	
	}
	
 function validarNickname(username) {
     var patron = /^([a-zA-ZáéíóúÜüÁÉÍÓÚ])+$/;
     if (!(patron.test(username))) {
         document.getElementById("cnickname").innerHTML = "Debes introducir tu Username.";
         document.getElementById('username').focus();
         return false;
     }
     return true;

 }

 function validarContrasena(password) {

     valor = document.getElementById("password").value;
     var patron = /^([a-zA-Z0-9])+$/;
     if (!(patron.test(password))) {
         document.getElementById("ccontrasena").innerHTML = "Debes introducir tu contraseña. Solo números y letras.";
         document.getElementById('password').focus();
         return false;
     }
     return true;

 }
 
 function contraIguales() {
     var contra1 = document.getElementById("password").value;
     var contra2 = document.getElementById("password2").value;
     if (contra1 != contra2) {
         document.getElementById("ccontrasena2").innerHTML = "Las contraseñas deben ser iguales.";

         document.getElementById('contrasena2').focus();
         return false;
     }
     return true;
 }

 function validarEmail(mail) {
     valor = document.getElementById("mail").value;


     var patron = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     if (!(patron.test(mail))) {
         document.getElementById("cemail").innerHTML = "Debes introducir un email válido";
         document.getElementById('mail').focus();
         return false;
     }
     return true;
 }


function validar() {

	limpia();
   
     valor = document.getElementById("username").value;
     if (!validarNickname(valor)) return false;
     
    

     valor = document.getElementById("password").value;
     if (!validarContrasena(valor)) return false;
	 
	 if (!contraIguales()) return false;
     
     //Email
     valor = document.getElementById("mail").value;
     if (!validarEmail(valor)) return false;




 }
</script>
</br>
</br>
</br>
</br>
 <section id="registrar" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
					<h2 class="section-heading">Registrate</h2>
         <div id="formularioregistro">

        <form onsubmit="return validar()" method="post" action="<?= base_url() ?>index.php/sess/register">

			<label for="nombre">Nombre</label></br>
				<input type="text" name="username" value="" size="20" maxlength="30" id="username" /><span class="error" id="cnickname" style="color: red;"></span><br />
			<label for="contrasena">Contraseña</label></br>
				<input type="password" name="password" value="" maxlength="10" id="password" /><span class="error" id="ccontrasena" style="color: red;"></span><br />
            <label for="contrasena2">Repite la clave</label></br>
                <input type="password" name="password2" value="" maxlength="10" id="password2" /><span class="error" id="ccontrasena2" style="color: red;"></span><br/>
            <label for="mail">Email</label></br>
                <input type="text" name="email" size="20" id="mail" /><span class="error" id="cemail" style="color: red;"></span></br>

                <input type="hidden" name="rol" id="rol" value="user" readonly="readonly"></br>
				
				<input type="submit" name="enviar" value="Registrarse"/>
		</form>
               
		</div>
			</div>
                </div>
            </div>

    </section>

