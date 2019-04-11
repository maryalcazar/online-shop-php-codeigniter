<?php

class Admin extends CI_Controller {
	function index() {
		if ($this->session->userdata('rol') != "admin" || !$this->session->userdata('id')) {
            header('Location: ' . base_url());
		}
		$this->load->view('header', ['tituloE' => 'Administración']);
		$this->load->view('admin', ['usuario' => $this->session->userdata('nombre')]);
		$this->load->view('footer');
	}
}