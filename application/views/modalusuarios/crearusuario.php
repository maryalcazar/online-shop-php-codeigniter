<script>
    $(document).ready(function() {
        $('#crear').click(function() {
            var form = $('<form id="form-crear"></form>');
            var name = $('<input id="name" name="name" type="text" class="form-control" placeholder="nombre">');
            var clave = $('<input id="clave" name="last-name" type="password" class="form-control" placeholder="clave">');
            var etiquetaRol = $('<p>Elije rol:</p>');
            var rol = $('<select class="form-control" id="rol"><option value="admin">Administrador</option><option value="usuario">Usuario</option></selct>');
            var email = $('<input id="email" name="email" type="text" class="form-control" placeholder="email">');

            form.append(name)
                .append(clave)
                .append(etiquetaRol)
                .append(rol)
                .append(email)
            form.on('submit', function(event){event.preventDefault();});
            BCE.showDialog({
                id: "dialog-crear",
                title: "Inserta usuario nuevo",
                body: form,
                buttons: [
                    {
                        label: "Crear usuarios",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/usuarios/crear",
                                method: "post",
                                data: {
                                    name: $('#name').val(),
                                    clave: $('#clave').val(),
                                    rol: $('#rol').val(),
                                    email: $('#email').val(),
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Usuario creado con éxito",
                                        body: $('<p>El usuario ' + name.val() + ' se ha creado con éxito</p>'),
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
                    }
                ]
            });
        /* CORRECCIÓN PARA QUE EL MODAL CUANDO APAREZCA TENGA EL FOCO */
            $('#dialog-crear').on('shown.bs.modal', function() {
                var us = $('#name');
                us[0].focus();
            });
        
        });
    });

</script>