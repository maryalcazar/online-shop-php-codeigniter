<script>
    $(document).ready(function() {
        $('[data-id="editar"]').click(function(event) {
            event.preventDefault();
            
			var r_id = $(this).parents('tr').find('td')[0].innerHTML.trim();
            var r_nombre = $(this).parents('tr').find('td')[1].innerHTML.trim();
			var r_categoria = $(this).parents('tr').find('td')[2].innerHTML.trim();

            
            var form = $('<form id="form-editar"></form>');
            var p = $('<p>¿quieres editar el elemento?</p>');
			var id = $('<input value='+r_id+' id="id" name="id" type="hidden">');
            var name = $('<input value="'+r_nombre+'" id="name" name="name" type="text" class="form-control" placeholder="nombre">');
			var categoria = $('<input value="'+r_categoria+'" id="categoria" name="categoria" type="text" class="form-control" >');
           
         
         
            
             //var id = $(this).parents('tr').find('td')[0].innerHTML;

             var foto = $('<input type="file" id="file-select" name="fichero">');

            form.append(id)
				.append(name)
				.append(categoria)
                .append(foto);
            
            form.on('submit', function(event) {
                event.preventDefault();
            });
            
            BCE.showDialog({
                id: "dialog-editar",
                title: "Editar producto " + r_nombre,
                body: form,
                buttons: [
                    {
                        label: "Sí",
                        class: "btn btn-success",
                        onClick: function() {
							var formData = new FormData( $("#form-editar")[0]);
                            $.ajax({
                                url: "<?= base_url() ?>index.php/productos/modificar",
                                method: "post",
                                processData: false,
                                contentType: false,
                                data: formData,/* {
                                    name: $('#name').val(),
									categoria: $('#categoria').val(),
                                    id: id,
									imagen: $('#file-select').val(),
                            
                                },*/
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Producto Editado con éxito",
                                        body: $('<p>El producto se ha editado con éxito</p>'),
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