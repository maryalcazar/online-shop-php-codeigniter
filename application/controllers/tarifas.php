<?php

class tarifas extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tarifas");
        
        if ($this->session->userdata('rol') != "admin" || !$this->session->userdata('id')) {
            header('Location: ' . base_url());
		}
    }
    
    function index(){
        header('Location: ' . base_url() . 'index.php/tarifas/listar/');
    }
    
    function listar($idprod, $page = 0) {
        $lista = (array)$this->M_tarifas->listar($idprod, $page);
        $num_tarifas = $this->M_tarifas->obtener_numero_tarifas($idprod);
        $nombre_producto = $this->M_tarifas->nombre_producto($idprod);
        
        $this->load->view('header',["tituloE"=>'lista de tarifas']);
        $this->load->view('navbar',["usuario" => $this->session->userdata('nombre')]);
        $this->load->view('tabla_doble',[
            'cabeceras' => ["ID", "TAMAÑO", "PRECIO"],
            'filas' => $lista,
            'num_total' => $num_tarifas,
            'seccion' => 'tarifas',
            'botones' => [
                $this->botones->editar,
                $this->botones->borrar,
            ],
            'id' => $idprod
        ]);
        $this->load->view("modaltarifas/creartarifas");
        $this->load->view("modaltarifas/borrartarifas");
        $this->load->view("modaltarifas/editartarifas");   
    }
    

    
    function crear() {
        $tamano = $this->input->post('tamano');
        $precio = $this->input->post('precio');
        $id_producto = $this->input->post('id_producto');
        echo $this->M_tarifas->crear($id_producto, $tamano, $precio)? "Insertado" : "Error";

    }
    
    function borrar() {
        $id_producto = $this->input->post('id_producto');
        $tamano= $this->input->post('tamano');
        echo $this->M_tarifas->borrar($id_producto, $tamano) ? "Borrado" : "Error";
        
    }
    
    function modificar(){
        $tamano = $this->input->post('tamano');
        $precio = $this->input->post('precio');
        $id_producto = $this->input->post('id_producto');
        $r_tamano = $this->input->post('r_tamano');
        echo $this->M_tarifas->modificar($id_producto, $r_tamano, $tamano, $precio) ? "Editado" : "Error";
    }

    
}