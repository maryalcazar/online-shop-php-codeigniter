<script>
    $('[data-id="tarifar"]').on('click', function() {
        var id = $(this).parents('tr').find('td')[0].innerHTML.trim();
        window.location.href = "<?= base_url() ?>index.php/tarifas/listar/" + id;
    });
</script>
