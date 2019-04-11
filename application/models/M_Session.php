<?php

class M_Session extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function comprobar($user, $pass) {
        if ($this->db->query("SELECT id FROM usuarios WHERE nombre = '$user' AND clave = '$pass' ")->row())
            return true;
        else
            return false;
    }
	
	function comprobar2($user, $pass, $rol) {
        if ($this->db->query("SELECT id FROM usuarios WHERE nombre = '$user' AND clave = '$pass' and rol='$rol' ")->row())
            return false;
        else
            return true;
    }

    function info($user) {
        return $this->db->query("SELECT id, nombre, rol FROM usuarios WHERE nombre = '$user'")->row_array();
    }
	
	 function crear($user, $pass, $email, $rol) {
      return $query = $this->db->query("INSERT INTO usuarios (nombre, clave, email, rol) VALUES ('$user', '$pass', '$email', '$rol');");
    }
}