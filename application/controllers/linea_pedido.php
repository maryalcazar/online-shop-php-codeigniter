<?php
class Linea_pedido extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_Lineapedido");
        $header = ["titulo" => "Prueba"];
        $this->load->view('header',["tituloE"=>'Linea pedidos']);
        $this->load->view('navbar',["usuario" => $this->session->userdata('nombre')]);
        if ($this->session->userdata('rol') != "admin" || !$this->session->userdata('id')) {
            header('Location: ' . base_url());
		}
    }
    
    function index() {
        header('Location: ' . base_url() . 'index.php/linea_pedido/listar/');
    }
    
    function listar($id_pedido, $page = 0){
        $resultado = $this->M_Lineapedido->listar_pedido($id_pedido, $page); 
        $num_lpedidos = $this->M_Lineapedido->obtener_numero_lpedidos_pedido($id_pedido);   
        $this->load->view('tabla_doble',[
            'cabeceras' => ["ID PEDIDO", "ID PRODUCTO", "NOMBRE PRODUCTO", "TAMÑO", "CANTIDAD", "PRECIO UNITARIO", "PRECIO TOTAL"],
            'filas' => $resultado,
            'num_total' => $num_lpedidos,
            'seccion' => 'linea_pedido',
            'botones' => [
                $this->botones->editar,
                $this->botones->borrar,
            ],
            'id' => $id_pedido
        ]);
        $this->load->view("modallinea_pedido/crear_lpedido");
        $this->load->view("modallinea_pedido/borrar_lpedido");
        $this->load->view("modallinea_pedido/editar_lpedido");
        $this->load->view('footer');
    }
    
     function modificar(){
        $id_producto = $this->input->post('id_producto');
        $id_pedido = $this->input->post('id_pedido');
        $tamano = $this->input->post('tamano');
        $cantidad = $this->input->post('cantidad');
        echo $this->M_Lineapedido->modificar($id_producto, $id_pedido, $tamano, $cantidad) ? "Editado" : "Error";
    }
    
    function crear() {
        $id_producto = $this->input->post('id_producto');
        $id_pedido = $this->input->post('id_pedido');
        $tamano = $this->input->post('tamano');
        $cantidad = $this->input->post('cantidad');
        echo $this->M_Lineapedido->crear($id_producto, $id_pedido, $tamano, $cantidad)? "Insertado" : "Error";

    }
    
    function borrar() {
        $id_producto = $this->input->post('id_producto');
        $id_pedido = $this->input->post('id_pedido');
        $tamano = $this->input->post('tamano');
        
        if ($id_producto and $id_pedido and $tamano)        
            echo $this->M_Lineapedido->borrar($id_producto, $id_pedido, $tamano) ? 1 : -1;
        else echo -2;
    }
    
    
}