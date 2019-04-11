<?php

class Usuarios extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_Usuarios");
        if ($this->session->userdata('rol') != "admin" || !$this->session->userdata('id')) {
            header('Location: ' . base_url());
		}
    }
    
    function index(){
        header('Location: ' . base_url() . 'index.php/usuarios/listar/');
    }
    
    function listar($page = 0) {
        $this->load->model("M_Imagenes");
        $lista = (array)$this->M_Usuarios->listar($page);
        for($i = 0; $i < count($lista); $i++){
            $lista[$i]->imagen = $this->M_Imagenes->leerCarpeta("perfiles/".$lista[$i]->id."/");
        }
        $num_usuarios = $this->M_Usuarios->obtener_numero_usuarios();
        $this->load->view('header',["tituloE"=>'lista de usuarios']);
        $this->load->view('navbar',["usuario" => $this->session->userdata('nombre')]);
        $this->load->view('tabla',[
            'cabeceras' => ["ID", "NOMBRE", "ROL","EMAIL","IMAGEN"],
            'filas' => $lista,
            'num_total' => $num_usuarios,
            'seccion' => 'usuarios',
            'botones' => [$this->botones->editar, $this->botones->borrar]
            ]);
        $this->load->view("modalusuarios/crearusuario");
        $this->load->view("modalusuarios/borrarusuario");
        $this->load->view("modalusuarios/editarusuario");
        
    }
    

    
    function crear() {
        $nombre = $this->input->post('name');
        $clave = $this->input->post('clave');
        $rol = $this->input->post('rol');
        if (!$rol) {
            $rol = 'user';
        }
        $email = $this->input->post('email');
        echo $this->M_Usuarios->crear($nombre, $clave, $rol, $email)? "Insertado" : "Error";

    }
    
    function borrar($id) {
        $id = $this->input->post('id');
       echo $this->M_Usuarios->borrar($id) ? "Borrado" : "Error";
        
    }
    
    function modificar(){
        $nombre = $this->input->post('name');
        $clave = $this->input->post('passwd');
        $rol = $this->input->post('rol');
        $id = $this->input->post('iduser');
        var_dump($id);
        $email = $this->input->post('email');        
        if($_FILES["fichero"]['name'] != ''){
            $imagen = $_FILES["fichero"];
            $this->load->model("M_Imagenes");
            $carpeta = "perfiles/".$id."/"; //para uploads.
            $resultado = $this->M_Imagenes->upFiles($imagen, $carpeta, $id);    
            var_dump($resultado);
        }        
       echo $this->M_Usuarios->modificar($id, $nombre, $clave, $rol, $email) ? "Editado" : "Error";
    }
    
    function perfil(){
        $perfil = $this->session->get_userdata();
        $usuario = $this->M_Usuarios->perfil($perfil['id']);
        header("application/json");
        echo json_encode($usuario);
    }
    
    

    
}