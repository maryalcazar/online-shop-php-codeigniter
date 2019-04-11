<script>
    $(document).ready(function() {
        $('[data-id="editar"]').click(function(event) {
            event.preventDefault();
            var idPedido = $(this).parents('tr').find('td')[0].innerHTML;
            var usuario = $(this).parents('tr').find('td')[2].innerHTML;
            var estado = $(this).parents('tr').find('td')[4].innerHTML;
            
            var form = $('<form id="form-editar"></form>');
            var p = $('<p>¿Desea editar el pedido '+idPedido+' de '+usuario+'?</p>');
            var label = $('<label for="estado">Estado</label>');
            var estadoSelect = $('<select name="estado" id="estado" class="form-control" placeholder="nombre"></select>');
            var option1 = $('<option value="0">Procesando</option>');
            var option2= $('<option value="1">Terminado</option>');
            var option3= $('<option value="2">Entregado</option>');
            estadoSelect.append(option1).append(option2).append(option3);
            var clave = $('<input id="clave" name="last-name" type="password" class="form-control" placeholder="clave">');
            var etiquetaRol = $('<p>Elije rol:</p>');
            var rol = $('<select class="form-control" id="rol"><option value="admin">Administrador</option><option value="usuario">Usuario</option></selct>');
            
            /*if (estado == "Procesando") {
                rol.children('[value="0"]').attr('selected', 'selected');
            } else if(estado == "Terminado"){
                rol.children('[value="1"]').attr('selected', 'selected');
            }else{
                rol.children('[value="2"]').attr('selected', 'selected');
            }*/
            
            
            form.append(p)
                .append(label)
                .append(estadoSelect);            
            BCE.showDialog({
                id: "dialog-editar",
                title: "Editar pedido " + idPedido,
                body: form,
                buttons: [
                    {
                        label: "Sí",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/pedidos/modificar",
                                method: "post",
                                data: {
                                    id: idPedido.trim(),
                                    estado: estadoSelect.val().trim()                            
                                },
                                success: function(r){
                                console.log(r);
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Pedido Editado con éxito",
                                        body: $('<p>El pedido se ha editado con éxito</p>'),
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
        });
        
    });
</script>