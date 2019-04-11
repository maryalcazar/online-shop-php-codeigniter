<?php

class M_Usuarios extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function listar($page){
        $page *= 5;
        return $this->db->query("SELECT id, nombre, rol, email FROM usuarios limit 5 offset $page")->result();
    }
    
    function perfil($user){
        return $this->db->query("SELECT id, nombre, rol, email FROM usuarios where id=$user")->row();
    }
    
    function obtener_numero_usuarios() {
        return $this->db->query("SELECT COUNT(*) AS 'num' FROM usuarios")->row()->num;
    }
    
    function crear($nombre, $clave, $rol, $email) {
      return $query = $this->db->query("INSERT INTO usuarios VALUES (null, '$nombre', '$clave', '$rol', '$email');");
    }
    
    function borrar($id){
         if ($this->db->query("DELETE FROM usuarios WHERE id=$id;")) {
             return true;
         } else return false;
    }
   
    function modificar($id, $nombre, $clave, $rol, $email){
        return $this->db->query("update usuarios SET nombre='$nombre', rol='$rol', clave='$clave', email = '$email' where id = $id;");
    }  
    
}

?>