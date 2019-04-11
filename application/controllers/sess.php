<?php

class Sess extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_Session");
     
    }

    function login() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        if ($user and $pass) {
            if ($this->M_Session->comprobar($user, $pass)) {
                $this->session->set_userdata($this->M_Session->info($user));
                header("Location: " . base_url() . "index.php");
            } else {
				
                header("Location: " . base_url() . "index.php/logueofail");
                
            }
        } else {

              header("Location: " . base_url() . "index.php/logueofail");
        }
    }
	
	
	  
     function register() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $pass2 = $this->input->post('password2');
        $email = $this->input->post('email');
		$rol = $this->input->post('rol');
		
		if ($user and $pass and $email and $rol) {
		    if ($this->M_Session->comprobar2($user, $pass, $rol)) {
				 
				 if ($this->M_Session->crear($user, $pass, $email, $rol)) {
						  
						   
						  header("Location: " . base_url() . "index.php/registrook");

				} else {
				 
						header("Location: " . base_url() . "index.php/registrofail");
				}
			}else{
				header("Location: " . base_url() . "index.php/registrofail");
			}
		}else{
			header("Location: " . base_url() . "index.php/registrofail");
		}
    }

    function logout() {
        $this->session->sess_destroy();
        header("Location: " . base_url() . "index.php");
    }
}