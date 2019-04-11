<script>
    $(document).ready(function() {
        $('[data-id="linea"]').click(function(event) {
            var idPedido = $(this).parents('tr').find('td').eq(0).text().trim();
            window.location.href = "<?= base_url() ?>index.php/linea_pedido/listar/" + idPedido;
        });
    });
</script>