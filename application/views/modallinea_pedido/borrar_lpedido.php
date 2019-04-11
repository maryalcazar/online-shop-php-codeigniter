<script>
    $(document).ready(function() {
        $('[data-id="borrar"]').click(function(event) {
            event.preventDefault();
            var p = $('<p>¿quieres eliminar el elemento?</p>');
             var id_producto = $(this).parents('tr').find('td')[1].innerHTML.trim();
             var id_pedido = $(this).parents('tr').find('td')[0].innerHTML.trim();
             var color = $(this).parents('tr').find('td')[3].innerHTML.trim();

            
            BCE.showDialog({
                id: "dialog-crear",
                title: "Borra linea_pedido",
                body: p,
                buttons: [
                    {
                        label: "Sí",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/linea_pedido/borrar",
                                method: "post",
                                data: {
                                    id_pedido: id_pedido,
                                    id_producto: id_producto,
                                    color: color
                            
                                },
                                success: function(r) {
//                                    alert(r);
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "linea_pedido borrada con éxito",
                                        body: $('<p>linea_pedido borrada con éxito</p>'),
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
                                    w.document.write(b);
                                    w.document.write(c);
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