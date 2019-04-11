<?php

class Botones {
    public $editar = [
        'id' => "editar",
        'class' => 'btn btn-xs btn-success glyphicon glyphicon-pencil',
        'inner' => ''
		
		/*<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> </a>*/
    ];
    
    public $borrar = [
        'id' => "borrar",
        'class' => 'btn btn-xs btn-danger glyphicon glyphicon-trash',
        'inner' => ''
    ];
    /*<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> </a>*/
    public $tarifar = [
        'id' => "tarifar",
        'class' => 'tarifar btn btn-xs btn-warning',
        'inner' => 'Tarifar'
    ];
    
    public $linea_pedidos = [
        'id' => "linea",
        'class' => 'tarifar btn btn-xs btn-primary',
        'inner' => 'Linea de Pedido'
    ];
}