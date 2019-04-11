<div class="container-fluid">
    <h1 class="text-center"><?= $seccion ?></h1>
    <div class="row">
        <!--
        <div class="col-md-2"> 
            
            <u>PANEL ADMINISTRATIVO</u>
            
        </div>
-->
    </div>
    <div class="row">
        <div class="col-md-2">
            <ul class="botones">
                <li><a href="<?= base_url() ?>index.php/usuarios/listar" class="btn btn-primary btn-warning">USUARIOS</a> </li>
                <li><a href="<?= base_url() ?>index.php/productos/listar" class="btn btn-primary btn-warning">PRODUCTOS</a></li>
                <li><a href="<?= base_url() ?>index.php/pedidos/listar" class="btn btn-primary btn-warning">PEDIDOS</a></li>
         <!--   <li><a href="<?= base_url() ?>index.php/linea_pedido/listar/1" class="btn btn-primary btn-warning">LINEAS DE PEDIDO</a></li>
                <li><a href="<?= base_url() ?>index.php/tarifas/listar/1" class="btn btn-primary btn-primary">TARIFAS</a></li> -->
            </ul>
        </div>
        <div class="col-md-10">
            <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-8">
                   <!-- <input class="form-control" type="text" name="buscar" id="buscar" placeholder="Buscar...">-->
                </div>
                <div class="col-md-2">
                    <!--<button class="btn btn-block btn-success" id="btn-buscar"><span class="glyphicon glyphicon-search"></span>Buscar</button>-->
                </div>
                <div class="col-md-2">
                    <button id="crear" class="btn btn-block btn-success" type="button"><span class="glyphicon glyphicon-plus"></span> <b></b></button>
                </div>
            </div>
            <table class="table table-hover">
                <thead id="thead">
                    <tr>
                        <?php foreach($cabeceras as $cabecera): ?>
                            <th>
                                <?= $cabecera ?>
                            </th>
                            <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php for ($i = 0; $i < count($filas); $i++): ?>
                        <tr>
                            <?php foreach($filas[$i] as $columna): ?>
                                <td>
                                    <?= $columna ?>
                                </td>
                            <?php endforeach; ?>
                            <td>
                                <?php if (isset($botones)): ?>
                                    <?php foreach($botones as $boton): ?>
                                        <button data-id="<?= $boton['id'] ?>" class="<?= $boton['class']; ?>">
                                            <?= $boton['inner'] ?>
                                        </button>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            <nav>
                <ul class="pagination">
                    <?php for($i = 0; $i < $num_total / 5; $i++): ?>
                        <li>
                            <a href="<?= base_url() ?>index.php/<?= $seccion ?>/listar/<?= $id ?>/<?= $i ?>">
                                <?= $i + 1 ?>
                            </a>
                        </li>
                        <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>