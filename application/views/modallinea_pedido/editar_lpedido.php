<script>
    $(document).ready(function() {
        $('[data-id="editar"]').click(function(event) {
            event.preventDefault();
             
            var form = $('<form id="form-crear"></form>');
            var cantidad = $('<input id="cantidad" name="cantidad" type="text" class="form-control" placeholder="Cantidad">');
            
            v_tamano = $(this).parents('tr').find('td')[3].innerHTML.trim();
            id_pedido = $(this).parents('tr').find('td')[0].innerHTML.trim();
            id_producto = $(this).parents('tr').find('td')[1].innerHTML.trim();

            form.append(cantidad);
            
            BCE.showDialog({
                id: "dialog-editar",
                title: "Editar usuario linea_pedido",
                body: form,
                buttons: [
                    {
                        label: "Sí",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/linea_pedido/modificar",
                                method: "post",
                                data: {                                    
                                    tamano: v_tamano,
                                    cantidad: $('#cantidad').val(),
                                    id_producto: id_producto,
                                    id_pedido: id_pedido                            
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "la linea_pedido se ha editado con éxito",
                                        body: $('<p>la linea_pedido se ha editado con éxito</p>'),
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
                var us = $('#tamano');
                us[0].focus();
            });
        });
    });

</script>