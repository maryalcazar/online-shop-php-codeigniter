<script>
    $(document).ready(function() {
        $('#crear').click(function() {
            var form = $('<form id="form-crear"></form>');
            var name = $('<input id="name" name="name" type="text" class="form-control" placeholder="nombre">');
			var categoria = $('<input id="categoria" name="categoria" type="text" class="form-control" placeholder="categoria">');
           
            
            form.append(name)
				.append(categoria)

            form.on('submit', function(event){event.preventDefault();});
            BCE.showDialog({
                id: "dialog-crear",
                title: "Inserta producto nuevo",
                body: form,
                buttons: [
                    {
                        label: "Crear Producto",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/productos/crear",
                                method: "post",
                                data: {
                                    name: name.val(),
									categoria: categoria.val(),
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Producto creado con éxito",
                                        body: $('<p>El producto ' + name.val() + ' se ha creado con éxito</p>'),
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