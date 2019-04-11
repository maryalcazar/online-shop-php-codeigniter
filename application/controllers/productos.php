<?php

class Productos extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_Productos");
        if ($this->session->userdata('rol') != "admin" || !$this->session->userdata('id')) {
            header('Location: ' . base_url());
		}
    }
	
	    function index(){
        header('Location: ' . base_url() . 'index.php/productos/listar/');
    }
    
    function listar($page = 0) {
		 $this->load->model("M_Imagenes");
        $lista = (array)$this->M_Productos->listar($page);
		for($i = 0; $i < count($lista); $i++){
            $lista[$i]->imagen = $this->M_Imagenes->leerCarpeta("productos/".$lista[$i]->id."/");
        }
        $num_productos = $this->M_Productos->obtener_numero_productos();
        
        $this->load->view('header',["tituloE"=>'lista de usuarios']);
        $this->load->view('navbar',["usuario" => $this->session->userdata('nombre')]);
        $this->load->view('tabla',[
            'cabeceras' => ["ID", "NOMBRE","CATEGORIA", "IMAGEN"],
            'filas' => $lista,
            'num_total' => $num_productos,
            'seccion' => 'productos',
            'botones' => [
                $this->botones->editar,
                $this->botones->borrar,
                $this->botones->tarifar
            ]
        ]);
		$this->load->view("modalproductos/crearproducto");
        $this->load->view("modalproductos/borrarproducto");
        $this->load->view("modalproductos/editarproducto");
        $this->load->view("modalproductos/tarifar");
    }
    

    
    function crear() {
       
		$nombre = $this->input->post('name');
		$categoria = $this->input->post('categoria');
		echo $this->M_Productos->crear($nombre, $categoria)? "Insertado" : "Error";
    }
	
	
    
    function borrar($id) {
		$id = $this->input->post('id');
       echo $this->M_Productos->borrar($id) ? "Borrado" : "Error";
    }
    
    function modificar(){
		$nombre = $this->input->post('name');
		$id = $this->input->post('id');
        $categoria = $this->input->post('categoria');
		if($_FILES["fichero"]['name'] != ''){
            $imagen = $_FILES["fichero"];
            $this->load->model("M_Imagenes");
            $carpeta = "productos/".$id."/"; //para uploads.
            $resultado = $this->M_Imagenes->upFiles($imagen, $carpeta, $id);    
            var_dump($resultado);
        }   
       echo $this->M_Productos->modificar($id, $nombre, $categoria) ? "Editado" : "Error";
    }
	
	
    
}
?>