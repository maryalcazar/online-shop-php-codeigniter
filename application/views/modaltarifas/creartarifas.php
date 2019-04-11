<script>
    $(document).ready(function() {
        $('#crear').click(function() {
            var form = $('<form id="form-crear"></form>');
            var tamano = $('<input id="color" name="tamano" type="text" class="form-control" placeholder="tamano">');
            var precio = $('<input id="precio" name="precio" type="text" class="form-control" placeholder="precio">');
            var id_producto = window.location.href;
            id_producto = id_producto.split("/");
            for(var i = 0; i < id_producto.length; i++){
                if(id_producto[i] == 'listar'){
                    id_producto = id_producto[i+1];
                    break;
                }
            }
            
            form.append(tamano)
                .append(precio);
            form.on('submit', function(event){event.preventDefault();});
            BCE.showDialog({
                id: "dialog-crear",
                title: "Inserta tarifa nueva",
                body: form,
                buttons: [
                    {
                        label: "Crear Tarifas",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/tarifas/crear",
                                method: "post",
                                data: {
                                    id_producto: id_producto,
                                    tamano: tamano.val(),
                                    precio: precio.val(),
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Tarifa creada con éxito",
                                        body: $('<p>La tarifa se ha creado con éxito</p>'),
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
                                    /*alert("Error");
                                    console.log(a);
                                    console.log(b);
                                    console.log(c);*/
                                }
                            });
                        }
                    }
                ]
            });
             /* CORRECCIÓN PARA QUE EL MODAL CUANDO APAREZCA TENGA EL FOCO */
            $('#dialog-crear').on('shown.bs.modal', function() {
                var us = $('#color');
                us[0].focus();
            });
        });
    });

</script>