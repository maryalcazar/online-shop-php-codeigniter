<script>
    $(document).ready(function() {        
        $('#crear').click(function() {
            var contenido = $('<div></div>');
            var form = $('<form id="form-crear"></form>');
            form.on('submit', function(e) {
                e.preventDefault();
            });
            var usuario = $('<input id="usuario" name="usuario" type="text" class="form-control" placeholder="usuario" autocomplete="off">');
            form.append(usuario);
            form.on('submit', function(event){event.preventDefault();});
            contenido.append(form);
            usuario.keyup(function(){
                $.ajax({
                    url: "<?= base_url() ?>index.php/pedidos/matching_names",
                    method: "post",
                    data: {
                        usuario: usuario.val()
                    },
                    success: function(xmlHttp) {
                        if(contenido.children().size() > 1){
                            $('#tablanombres').remove();
                        }
                       responseJSON = JSON.parse(xmlHttp);
                       var tabla = $('<table id="tablanombres" class="table table-hover"><tr><th>Nombre</th><th>Ud usuario</th><th>Crear Pedido</th></tr></table>');                        
                       for (var i = 0; i < responseJSON.nombresr.length; i++){
                           var iduser = responseJSON.nombresr[i].id;
                           var fila = $('<tr></tr>');
                           var tr1 = $('<td>' + responseJSON.nombresr[i].nombre + '</td>');
                           var tr2 = $('<td>' + responseJSON.nombresr[i].id + '</td>');
                           var tr3 = $('<td><button class="btn btn-xs btn-success">Crear pedido</button></td>');
                           tr3.children('button').eq(0).click(function(){
                               $.ajax({
                                url: "<?= base_url() ?>index.php/pedidos/crear",
                                method: "post",
                                data: {
                                    name: iduser
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Pedido creado con éxito.",
                                        body: $('<p>El pedido se ha creado con éxito</p>'),
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
                           });
                           fila.append(tr1).append(tr2).append(tr3);
                           tabla.append(fila);
                       }    
                        contenido.append(tabla);

                    },
                    error: function(a, b, c) {
                        var w = window.open();
                        w.document.write(a.responseText);
                    }
                });
            });
            
            BCE.showDialog({
                id: "dialog-crear",
                title: "Inserta un nuevo pedido",
                body: contenido,
                buttons: [
                    {
                        label: "Cerrar",
                        class: "btn btn-default",
                        onClick: BCE.closeDialog
                    }
                ]
            });
            /* CORRECCIÓN PARA QUE EL MODAL CUANDO APAREZCA TENGA EL FOCO */
            $('#dialog-crear').on('shown.bs.modal', function() {
                var us = $('#usuario');
                us[0].focus();
            });
        });
    });

</script>