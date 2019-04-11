<?php

class perfil extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_Perfil");  
        $this->load->model("M_Imagenes");
        if (!$this->session->userdata('id')) {
            header('Location: ' . base_url());
		}
    }
    
    public function index(){
        $this->load->view('frontendtienda/header');
        if ($this->session->userdata('id')) { //Session iniciada
            if ($this->session->userdata('rol') == "admin") { //Es admin
                $this->load->view('frontend/nav-admin');
            } else { //Iniciado, pero no admin
                $this->load->view('frontend/nav-log');
            }
            $id = $this->session->userdata('id');  
            $pedidos = $this->M_Perfil->pedidos_usuario($id);
            for($i = 0; $i<count($pedidos); $i++){
                switch ($pedidos[$i]->estado) {
                    case '0':
                        $pedidos[$i]->estado = "Procesando";
                        break;
                    case '1':
                        $pedidos[$i]->estado = "Terminado";
                        break;
                    case '2':
                        $pedidos[$i]->estado = "Enviado";
                        break;
                } 
            }        
            $infoPerfil = [
                'imagen' => $this->M_Imagenes->leerCarpeta("perfiles/".$id."/"),
                'infouser' => $this->M_Perfil->informacion_usuario($id),
                'cabeceras' => ["ID", "FECHA", "PRECIO","ESTADO"],
                'listaPedidos' => $pedidos
                ];
            $this->load->view('perfil', $infoPerfil);
            $this->load->view('frontendtienda/footer');
        } else { //No iniciado
            header('Location: ' . base_url());
        }
        
       
    }
}