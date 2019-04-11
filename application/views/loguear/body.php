
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


function validar() {

	limpia();
   
     valor = document.getElementById("username").value;
     if (!validarNickname(valor)) return false;
     
    

     valor = document.getElementById("password").value;
     if (!validarContrasena(valor)) return false;




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
					<h2 class="section-heading">Entra</h2>
         <div id="formularioregistro">
         
        <form onsubmit="return validar()" method="post" action="<?= base_url() ?>index.php/sess/login">

	<label for="nombre">Nombre</label>
       
            <input type="text" name="username" value="" size="20" maxlength="30" id="username" /><span class="error" id="cnickname" style="color: red;"></span>
            <br />
     <label for="contrasena">Contraseña</label>
            
            <input type="password" name="password" value="" maxlength="10" id="password" /><span class="error" id="ccontrasena" style="color: red;"></span><br />
      <input type="submit" name="enviar" value="Login"/>
        </form>
		</div>
			</div>
                </div>
            </div>

    </section>
