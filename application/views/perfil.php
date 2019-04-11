
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-md-3">
            <?= $imagen ?>
        </div>

        <div class="col-md-7">
            <?php foreach($infouser as $input): ?>
                <p>
                 <?= $input ?>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover ">
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
                    <?php for ($i = 0; $i < count($listaPedidos); $i++): ?>
                        <tr>
                            <?php foreach($listaPedidos[$i] as $columna): ?>
                                <td>
                                    <?= $columna ?>
                                </td>
                                <?php endforeach; ?>
                        </tr>
                        <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>