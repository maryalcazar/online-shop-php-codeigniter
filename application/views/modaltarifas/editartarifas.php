<script>
    $(document).ready(function() {
        $('[data-id="editar"]').click(function(event) {
            event.preventDefault();
            
            var r_tamano = $(this).parents('tr').find('td')[1].innerHTML.trim();
            var r_precio = $(this).parents('tr').find('td')[2].innerHTML.trim();
            
            
            var form = $('<form id="form-crear"></form>');
            var tamano = $('<input id="tamano" name="tamano" type="text" class="form-control" placeholder="tamano">');
            var precio = $('<input id="precio" name="precio" type="text" class="form-control" placeholder="precio">');            
            var id = $(this).parents('tr').find('td')[0].innerHTML.trim();

            form.append(tamano)
                .append(precio);
            
            BCE.showDialog({
                id: "dialog-editar",
                title: "Editar tarifa " + r_tamano,
                body: form,
                buttons: [
                    {
                        label: "Sí",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/tarifas/modificar",
                                method: "post",
                                data: {
                                    tamano: tamano.val(),
                                    precio: precio.val(),
                                    id_producto: id,
                                    r_tamano: r_tamano
                            
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Tarifa Editada con éxito",
//                                        body: $('<p>La tarifa se ha editado con éxito</p>'),
                                        body: $('<p>' + r + '</p>'),
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
          
             /* CORRECCIÓN PARA QUE EL MODAL CUANDO APAREZCA TENGA EL FOCO */
            $('#dialog-editar').on('shown.bs.modal', function() {
                var us = $('#precio');
                us[0].focus();
            });
        });
    });

</script>