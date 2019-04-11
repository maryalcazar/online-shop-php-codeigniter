<script>
    $(document).ready(function() {
        $('[data-id="editar"]').click(function(event) {
            event.preventDefault();
            
            var r_id = $(this).parents('tr').find('td')[0].innerHTML.trim();
            var r_nombre = $(this).parents('tr').find('td')[1].innerHTML.trim();
            var r_rol = $(this).parents('tr').find('td')[2].innerHTML.trim();
            var r_email = $(this).parents('tr').find('td')[3].innerHTML.trim();
            var form = $('<form id="form-editar" enctype=multipart/form-data></form>');
            var p = $('<p>¿Quieres editar el usuario?</p>');
            var id = $('<input value='+r_id+' id="iduser" name="iduser" type="hidden">');
            var name = $('<input value='+r_nombre+' id="name" name="name" type="text" class="form-control" placeholder="Nombre">');
            var clave = $('<input id="passwd" name="passwd" type="password" class="form-control" placeholder="Clave">');
            var etiquetaRol = $('<p>Rol:</p>');
            var rol = $('<select class="form-control" id="rol" name="rol"><option value="admin">Administrador</option><option value="usuario">Usuario</option></selct>');
            var email = $('<input id="email" name="email" type="text" class="form-control" placeholder="email" value="'+r_email+'">');
            if (r_rol == "admin") {
                rol.children('[value="admin"]').attr('selected', 'selected');
            } else {
                rol.children('[value="usuario"]').attr('selected', 'selected');
            }
            
             var foto = $('<input type="file" id="file-select" name="fichero">');

            form.append(id)
                .append(name)
                .append(clave)
                .append(etiquetaRol)
                .append(rol)
                .append(email)
                .append(foto);
                        
            BCE.showDialog({
                id: "dialog-editar",
                title: "Editar usuario " + r_nombre,
                body: form,
                buttons: [
                    {
                        label: "Sí",
                        class: "btn btn-success",
                        onClick: function() {
                            var formData = new FormData( $("#form-editar")[0]);
                            $.ajax({
                                url: "<?= base_url() ?>index.php/usuarios/modificar",
                                method: "post",
                                processData: false,
                                contentType: false,
                                data: formData /*data {
                                    name: $('#name').val(),
                                    clave: $('#clave').val(),
                                    rol: $('#rol').val(),
                                    email: $('#email').val(),
                                    id: r_id,
                                    imagen: $('#file-select').val()
                                }    */
                                ,
                                success: function(r) {
                                    console.log(r);
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Usuario Editado con éxito",
                                        body: $('<p>El usuario se ha editado con éxito</p>'),
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
                                    window.open().document.write(a.responseText);
                                }
                            });
                        }
                    },
                    {
                        label: "No",
                        class: "btn btn-danger",
                        onClick: BCE.closeDialog
                    }
                ]
            });
            
             /* CORRECCIÓN PARA QUE EL MODAL CUANDO APAREZCA TENGA EL FOCO */
            $('#dialog-editar').on('shown.bs.modal', function() {
                var us = $('#name');
                us[0].focus();
            });
        });
    });

</script>