<?php
class Logueofail extends CI_Controller {

       public function index(){
		
		 $this->load->view('frontend/header');
			if ($this->session->userdata('id')) { //Session iniciada
				if ($this->session->userdata('rol') == "admin") { //Es admin
					$this->load->view('frontendtienda/nav-admin');
				} else { //Iniciado, pero no admin
					$this->load->view('frontendtienda/nav-log');
				}
			} else { //No iniciado
				$this->load->view('frontendtienda/nav-no-log');
				//$this->load->view('frontend/login');
			}
        $this->load->view('loguear/fail');
        $this->load->view('frontend/footer');
        }
       
		
        
        }
    
?>