<body>

<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= base_url() ?>index.php/"><span class="glyphicon glyphicon-arrow-left"></span>  Ir al Frontend</a>
        </div>
        <form  role="form">
        <ul class="nav navbar-nav navbar-right">
            <li><a id="perfil" href="#"><span class="glyphicon glyphicon-user"></span> <?= $usuario ?></a></li>
            <li><a href="<?= base_url() ?>index.php/sess/logout"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
        </ul>
        </form>
    </div>
</nav>

</br></br></br>
</br></br></br>
</br></br></br>
<center>
            <a href="<?= base_url() ?>index.php/usuarios/listar" class="btn btn-lg btn-warning">USUARIOS</a> 
            <a href="<?= base_url() ?>index.php/productos/listar" class="btn btn-lg btn-warning">PRODUCTOS</a>
            <a href="<?= base_url() ?>index.php/pedidos/listar" class="btn btn-lg btn-warning">PEDIDOS</a>
           <!-- <a href="<?= base_url() ?>index.php/linea_pedido/listar/1" class="btn btn-lg btn-warning">LINEAS DE PEDIDO</a>
            <a href="<?= base_url() ?>index.php/tarifas/listar/1" class="btn btn-lg btn-primary">TARIFAS</a>   --> 
</center>
    
</body>
</html>

