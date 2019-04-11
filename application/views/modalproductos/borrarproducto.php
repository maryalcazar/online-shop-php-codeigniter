<script>
    $(document).ready(function() {
        $('[data-id="borrar"]').click(function(event) {
            event.preventDefault();
            var p = $('<p>¿quieres eliminar el producto?</p>');
             var id = $(this).parents('tr').find('td')[0].innerHTML;

            
            BCE.showDialog({
                id: "dialog-crear",
                title: "Elimina un producto.",
                body: p,
                buttons: [
                    {
                        label: "Sí",
                        class: "btn btn-success",
                        onClick: function() {
                            $.ajax({
                                url: "<?= base_url() ?>index.php/productos/borrar",
                                method: "post",
                                data: {
                                    id: id,
                            
                                },
                                success: function(r) {
                                    BCE.closeDialog();
                                    BCE.showDialog({
                                        id: "dialog-crear-ok",
                                        title: "Producto borrado con éxito",
                                        body: $('<p>El producto se ha eliminado con éxito</p>'),
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
    
        });
    });

</script>