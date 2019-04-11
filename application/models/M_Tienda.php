<?php

class M_Tienda extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
function listar($categoria){

        return $this->db->query("select * from productos where categoria like '$categoria'");
    }
	
}
