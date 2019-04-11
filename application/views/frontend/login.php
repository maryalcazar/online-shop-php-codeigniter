
<script>




 /*$(document).on('ready', function() {        
        $('#login').on('click', function(event) {
            event.preventDefault();

            var loginForm = $('<form method="post" id="loginForm" action="<?= base_url() ?>index.php/sess/login"></form>');
            var labeluser = $('<label for="user">Nombre</label>');
            var user = $('<input class="form-control" name="username" type="text" placeholder="Usuario" id="user">');
            var labelpasswd = $('<label for="user">Contraseña</label>');
            var pass = $('<input class="form-control" name="password" type="password" placeholder="Contraseña" id="pass">');

            loginForm.append(labeluser).append(user).append(labelpasswd).append(pass);

            BCE.showDialog({
                id: "login-dialog",
                title: "Entrar a <i>Quatrerodes SL</i>",
                body: loginForm,
                buttons: [
                    {
                        label: "Entrar",
                        class: "btn btn-primary",
                        onClick: function() {
                            loginForm.submit();
                        }
                    }, {
                        label: "Cerrar",
                        class: "btn btn-default",
                        onClick: BCE.closeDialog
                    }
                ]
            });
            
           
            $('#login-dialog').on('shown.bs.modal', function() {
                var us = $('#user');
                us[0].focus();
            });
            
        });*/
        
      
	  
	  

        
        /*$('#registrar').on('click', function(event) {
            event.preventDefault();

            var registerForm = $('<form method="post"enctype="multipart/form-data"  action="<?= base_url() ?>index.php/sess/register"></form>');
            var labeluser = $('<label for="user">Nombre</label>');
            var user = $('<input class="form-control" name="username" type="text" placeholder="Usuario" id="user" required>');
            var labelpasswd = $('<label for="user">Contraseña</label>');
            var pass = $('<input class="form-control" name="password" type="password" placeholder="Contraseña" id="pass" required>');
            var labelpasswd2 = $('<label for="user">Repite la Contraseña</label>');
            var pass2 = $('<input class="form-control" name="password2" type="password" placeholder="Contraseña" id="pass2" required>');
            var labelemail = $('<label for="email">Introduzca Email:</label>');
            var email = $('<input class="form-control" name="email" type="text" placeholder="email" id="email" required>');

            registerForm.append(labeluser)
                        .append(user)
                        .append(labelpasswd)
                        .append(pass)
                        .append(labelpasswd2)
                        .append(pass2)
                        .append(labelemail)
                        .append(email);

            BCE.showDialog({
                id: "register-dialog",
                title: "Registrarse en <i>Quatrerodes SL</i>",
                body: registerForm,
                buttons: [
                   {
                        label: "Registrar",
                        class: "btn btn-primary",
                        onClick: function() {
                            registerForm.submit();
                        }
                    }, 
                    {
                        label: "Registrar",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/usuarios/crear",
                                method: "post",
                                data: {
                                    name: user.val(),
                                    clave: pass.val(),
                                    email: email.val(),
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "register-dialog-ok",
                                        title: "Usuario registrado con éxito",
                                        body: $('<p>El usuario ' + user.val() + ' se ha registrado con éxito</p>'),
                                        buttons: [
                                            {
                                                label: "Aceptar",
                                                class: "btn btn-success",
                                                onClick: BCE.closeDialog
                                            }
                                        ],
                                        
                                         onClose: function() {
                                            location.reload(false);
                                         }
                                    });
                                },
                                error: function(a, b, c) {
                                    alert("Error");
                                    console.log(a);
                                    console.log(b);
                                    console.log(c);
                                }
                            });
                        }
                    },
                    
                    {
                        label: "Cerrar",
                        class: "btn btn-default",
                        onClick: BCE.closeDialog
                    }
                ]
            });
            
           
            $('#register-dialog').on('shown.bs.modal', function() {
                var us = $('#user');
                us[0].focus();
            });
        });
        
        
        
         
            
             
         
        
        
    });*/
</script>