<?php
class start extends CI_Controller {

        public function index(){
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
        $this->load->view('frontend/body');
        $this->load->view('frontend/footer');
        }
}