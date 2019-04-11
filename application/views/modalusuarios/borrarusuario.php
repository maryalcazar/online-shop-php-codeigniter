<script>
    $(document).ready(function() {
        $('[data-id="borrar"]').click(function(event) {
            event.preventDefault();
            var p = $('<p>¿quieres eliminar el elemento?</p>');
             var id = $(this).parents('tr').find('td')[0].innerHTML;

            
            BCE.showDialog({
                id: "dialog-crear",
                title: "Eliminar usuario",
                body: p,
                buttons: [
                    {
                        label: "Sí",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/usuarios/borrar",
                                method: "post",
                                data: {
                                    id: id,
                            
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Usuario borrado con éxito",
                                        body: $('<p>El usuario se ha eliminado con éxito</p>'),
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
                                    //Puede ser cualquier error, pero es el más probable
                                    
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "error-dialog",
                                        title: "Este usuario tiene un pedido",
                                        body: $('<p>No puedes borrar un usuario con un pedido.</p><p>Si este error es un falso positivo, contacte con el equipo de desarrollo.</p>'),
                                        buttons: [
                                            {
                                                label: "Aceptar",
                                                class: "btn btn-default",
                                                onClick: BCE.closeDialog
                                            }
                                        ]
                                    });
                                    
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
        });
    });

</script>