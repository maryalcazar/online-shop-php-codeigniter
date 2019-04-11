<?php

class M_Tarifas extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function listar($idprod, $page = 0){
        $page *= 5;
        return $this->db->query("SELECT id_producto, tamano , precio from tarifa where id_producto = $idprod limit 5 offset $page")->result();
    }
    
    function nombre_producto($idprod){
        return $this->db->query("SELECT nombre from productos where id = $idprod;")->result();
    }
    
    function obtener_numero_tarifas($idprod) {
        return $this->db->query("SELECT COUNT(*) AS 'num' FROM tarifa where id_producto = $idprod")->row()->num;
    }
    
    function crear($id_producto, $tamano,$precio) {
      return $query = $this->db->query("INSERT INTO tarifa (id_producto, tamano, precio) VALUES ($id_producto,'$tamano',$precio);");
    }
    
    function borrar($id_producto, $tamano){
         if ($this->db->query("DELETE FROM tarifa WHERE id_producto = $id_producto and tamano LIKE '$tamano';")) {
             return true;
         } else return false;
    }
    
    function modificar($id_producto, $r_tamano,$tamano,$precio){
        return $this->db->query("UPDATE tarifa SET tamano='$tamano',precio=$precio WHERE id_producto=$id_producto and tamano like '$r_tamano';");
    }
    
    function obtener_precio($id_producto, $tamano, $cantidad) {
	if (isset($this->db->query("SELECT round(precio*$cantidad,2) as 'precio' FROM tarifa WHERE id_producto = $id_producto AND tamano LIKE '$tamano';")->row()->precio)) {
		return $this->db->query("SELECT round(precio*$cantidad,2) as 'precio' FROM tarifa WHERE id_producto = $id_producto AND tamano LIKE '$tamano';")->row()->precio;
    }
    
    }
}