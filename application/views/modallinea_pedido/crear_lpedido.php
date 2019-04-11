<script>
    $(document).ready(function() {$('#crear').click(function() {
            var form = $('<form id="form-crear"></form>');
            //var tamano = $('<input id="tamano" name="tamano" type="text" class="form-control" placeholder="tamano">');
            var cantidad = $('<input id="cantidad" name="cantidad" type="text" class="form-control" placeholder="cantidad">');
            //var producto = $('<input id="producto" name="producto" type="text" class="form-control" placeholder="producto">');
            var selectTarifa = $('<select id="tarifas" name="tarifas" class="selectpicker form-control" disabled></select>');
            var options = $('<option value="">Seleccione tarifa</option>');
            selectTarifa.append(options);
            var id_pedido = window.location.href;
            id_pedido = id_pedido.split("/");
            for(var i = 0; i < id_pedido.length; i++){
                if(id_pedido[i] == 'listar'){
                    id_pedido = id_pedido[i+1];
                    break;
                }
            }
            $.ajax({
                    url: "<?= base_url() ?>index.php/tienda/listadoProductos",
                    method: "post",
                    data: {
                        id_pedido: id_pedido
                    },
                    success: function(xmlHttp) {
                       responseJSON = JSON.parse(xmlHttp);
                        var select = $('<select id="productos" name="productos" class="selectpicker form-control"></select>');
                        select.on('change', function(){
                            if(!$('#productos').val() == ''){
                                $.ajax({
                                    url: "<?= base_url() ?>index.php/tienda/listadoTarifas",
                                    method: "post",
                                    data: {
                                        id_producto: select.val(),
                                        id_pedido: id_pedido
                                    },
                                    success: function(xmlHttp) {
                                        responseJSON = JSON.parse(xmlHttp);
                                        $("#tarifas").empty();
                                        for (var i = 0; i < responseJSON.length; i++){
                                           var precio = responseJSON[i].precio;
                                           var nombre = responseJSON[i].tamano;
                                           var options = $('<option value="'+nombre+'">'+nombre+', '+precio+'€</option>');
                                           $("#tarifas").append(options);
                                        }                                    
                                        $("#tarifas").prop( "disabled", false);
                                    },
                                    error: function(a, b, c) {
                                        var w = window.open();
                                        w.document.write(a.responseText);

                                    }
                                });
                            }else{
                                $("#tarifas").empty();
                                var option = $('<option value="">Seleccione tarifa</option>');
                                $("#tarifas").append(option);
                                $("#tarifas").prop( "disabled", true);
                                
                            }                            
                        });
                        var option = $('<option value="">Selecciona un producto</option>');
                        select.append(option);
                       for (var i = 0; i < responseJSON.length; i++){
                           var idProducto = responseJSON[i].id;
                           var nombreProducto = responseJSON[i].nombre;
                           var option = $('<option value="'+idProducto+'">'+nombreProducto+'</option>');
                           select.append(option);
                        }    
                        form.append(select).append(selectTarifa).append(cantidad);

                    },
                    error: function(a, b, c) {
                        var w = window.open();
                        w.document.write(a.responseText);
                    }
                });
            
        
            form.on('submit', function(event){event.preventDefault();});
            BCE.showDialog({
                id: "dialog-crear",
                title: "Inserta linea pedido nueva",
                body: form,
                buttons: [
                    {
                        label: "Crear linea pedido nueva",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/linea_pedido/crear",
                                method: "post",
                                data: {
                                    tamano: $('#tarifas').val(),
                                    cantidad: $('#cantidad').val(),
                                    id_pedido: id_pedido,
                                    id_producto: $('#productos').val()                                   
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "linea_pedido creada con éxito",
                                        body: $('<p>la linea_pedido se ha creado con éxito</p>'),
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
                    }
                ]
            });
          /* CORRECCIÓN PARA QUE EL MODAL CUANDO APAREZCA TENGA EL FOCO 
            $('#dialog-crear').on('shown.bs.modal', function() {
                var us = $('#tamano');
                us[0].focus();
            }); */
        
        });
    });

</script>