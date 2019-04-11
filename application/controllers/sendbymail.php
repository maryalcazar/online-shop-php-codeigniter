<?php
class sendbymail extends CI_Controller {
   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
     
    
   public function sendbymail(){
      
       $this->load->library('email');
       $config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.office365.com';
$config['smtp_user'] = 'mary_5885_@hotmail.com';
$config['smtp_pass'] = 'xxxxxxxxxxxxxxx';
$config['smtp_port'] = 465;
$config['smtp_timeout'] = 60;
$config['charset'] = 'iso-8859-1';
$config['smtp_crypto'] = 'tls';
$config['mailtype'] = 'html';
$this->load->library('email', $config);
       
    
       
        $this->email->subject($this->input->post("asunto"));
         
        $this->email->message(
                "Nombre: ".$this->input->post("edad").
                "Edad: ".$this->input->post("sexo").
                "Email: ".$this->input->post("email").
            "Pais: ".$this->input->post("pais").
            "Texto: ".$this->input->post("Texto")
                );
       
        if($this->email->send()){
            
             ///////**BLOQUE SI ENVIADO**//////////
           
                   $this->load->view('frontend/header');
        if ($this->session->userdata('id')) { //Session iniciada
            if ($this->session->userdata('rol') == "admin") { //Es admin
                $this->load->view('frontend/nav-admin');
            } else { //Iniciado, pero no admin
                $this->load->view('frontend/nav-log');
            }
        } else { //No iniciado
            $this->load->view('frontend/nav-no-log');
            $this->load->view('frontend/login');
        }
        $this->load->view('frontend/enviado');
        $this->load->view('frontend/footer');
        }else{
            
            
            
            ///////**BLOQUE NO ENVIADO**//////////
            
            
                       $this->load->view('frontend/header');
        if ($this->session->userdata('id')) { //Session iniciada
            if ($this->session->userdata('rol') == "admin") { //Es admin
                $this->load->view('frontend/nav-admin');
            } else { //Iniciado, pero no admin
                $this->load->view('frontend/nav-log');
            }
        } else { //No iniciado
            $this->load->view('frontend/nav-no-log');
            $this->load->view('frontend/login');
        }
        $this->load->view('frontend/contactofallido');
        $this->load->view('frontend/footer');
        }
        }
       
}


 
?>


