<script>
    $(document).ready(function() {
        $('[data-id="borrar"]').click(function(event) {
            event.preventDefault();
            var p = $('<p>¿Quieres eliminar el pedido?</p>');
            var id = $(this).parents('tr').find('td')[0].innerHTML;
            BCE.showDialog({
                id: "dialog-borrar",
                title: "Elimina un pedido",
                body: p,
                buttons: [
                    {
                        label: "Sí",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/pedidos/borrar",
                                method: "post",
                                data: {
                                    id: id,
                            
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Pedido borrado con éxito",
                                        body: $('<p>El pedido se ha eliminado con éxito</p>'),
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
                                    var w = window.open();
                                    w.document.write(a.responseText);
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
        /* CORRECCIÓN PARA QUE EL MODAL CUANDO APAREZCA TENGA EL FOCO */
        $('#dialog-borrar').on('shown.bs.modal', function() {
                var p = $('p').eq(0);
                p[0].focus();
        });
    });

</script>